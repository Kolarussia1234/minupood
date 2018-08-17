<?php
if (!defined('_PS_VERSION_'))
    exit;

if(!class_exists('VeebipoedCarrierModel'))
    include( _PS_MODULE_DIR_ .'vp_omniva/libs/veebipoed_carrier_model.php');

if(!class_exists('VeebipoedCarrierModule'))
    include( _PS_MODULE_DIR_ .'vp_omniva/libs/veebipoed_carrier_module.php');

class OmnivaSize extends VeebipoedCarrierModel
{
    public $name;
    public $height;
    public $width;
    public $depth;
    public $price;
    public $id_group;
    public $price_to;
    public $price_from;

    public static $definition = array(
        'table' => 'vp_omniva_size',
        'primary' => 'id_vp_omniva_size',
        'multilang' => false,
        'fields' => array(
            'name' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true),
            'height' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => true),
            'width' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => true),
            'depth' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => true),
            'price' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => true),
            'price_to' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => true),
            'price_from' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => true),
            'id_group' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true)
        )
    );
}

class vp_omniva extends VeebipoedCarrierModule
{
    public  $id_carrier;
    private $url = 'https://www.omniva.ee/locations.json';

    const TYPE_OFFICE = 1;
    const TYPE_TERMINAL = 0;

    const ESTONIA = 'EE';
    const LATVIA = 'LV';
    const LIETUVA = 'LT';

    public function __construct()
    {
        $this->name = 'vp_omniva'; //module name
        $this->tab = 'shipping_logistics';
        $this->version = '3.0.1';
        $this->author = 'Veebipoed.ee';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('Omniva');
        $this->description = $this->l('Omniva carrier');
        $this->description = $this->l('Creates Omniva carrier that allows Your customers to choose terminal from list and calculates parcel price according to goods dimensions');
	    $this->module_key = '5c2e5538d16f892c4f1a5e0c9df3e4c6';
    }

    public function hasSizes()
    {
        return OmnivaSize::getSizes();
    }

    public function getMaxWeight()
    {
        return 30;
    }

    public function getMaxWidth()
    {
        return 38;
    }

    public function getMaxHeight()
    {
        return 41;
    }

    public function getMaxDepth()
    {
        return 64;
    }

    public function getDefaultCity()
    {
        $query = new DbQuery();
        $query->select('group_id');
        $query->from($this->name);
        $query->where('`active` = 1');
        $query->limit(1);

        $result = Db::getInstance()->executeS($query);

        if (is_array($result) && count($result) == 1)
        {
            return $result[0]['group_id'];
        }

        return false;
    }

    public function getTabClassName()
    {
        return 'AdminOmniva';
    }

    public function getFreeShippingBoxName()
    {
        return 'groupBox';
    }

    public function getCityField()
    {
        return 'asula';
    }

    public function getSizes($include_deleted, $id_group, $order_total)
    {
        return OmnivaSize::getSizes($include_deleted, $id_group, $order_total);
    }

    public function getTerminals($params = array())
    {
        $where = array();
        foreach($params as $param)
        {
            $where[] = sprintf('`%s`%s%s', $param[0], $param[1], pSQL($param[2]));
        }

        $sql = 'SELECT `id_%2$s`, `sihtnumber`, `name`, `address`, `asula`,
            `maakond`, `group_id`, `active`, `tyyp`, `muudetud`
            FROM `%1$s%2$s`'.
            ($where ? ' WHERE '.implode(' AND ', $where) : '').
            ' ORDER BY `maakond` ASC, `name` ASC;';

        return Db::getInstance()->executeS(sprintf($sql,_DB_PREFIX_, $this->name));
    }

    public function getGroupNames()
    {
        $sql = 'SELECT DISTINCT `group_id`, `maakond`
            FROM `%1$s%2$s`
            WHERE `active` = 1
            ORDER BY `maakond` ASC;';

        return Db::getInstance()->executeS(sprintf($sql,_DB_PREFIX_, $this->name));
    }

    public function hookDisplayAdminomnivaOptions($params)
    {
        $groups =  Group::getGroups($this->context->language->id);
        $selectedGroups = array();

        if(Tools::isSubmit('submitOptionsomniva_size'))
        {
            Configuration::updateValue(
                $this->prefixed($this->getFreeShippingBoxName()),
                implode(',', Tools::getValue($this->getFreeShippingBoxName(), array()))
            );
        }

        $selectedGroups = $this->getFreeShippingGroups();
        foreach ($groups as &$value)
        {
            if(isset($selectedGroups[$value['id_group']]))
            {
                $value['checked'] = true;
            }
            else
            {
                $value['checked'] = false;
            }
        }

        $this->smarty->assign(array(
            'groups' => $groups,
            'name' => $this->getFreeShippingBoxName(),
        ));
        return $this->display(__FILE__, 'options.tpl');
    }


    public function importTerminals()
    {
        $response = utf8_encode(Tools::file_get_contents($this->url));
        $rows = Tools::jsonDecode($response);
        unset($response);

        $inserts = array();
        $updates = array();
        $removes = array();
        $terminals = $this->getTerminals();
        $sorted_terminals = array();
        $cities = array();

        if ($terminals) {
            foreach($terminals as $terminal) {
                $sorted_terminals[$terminal['name']] = $terminal;
                $cities[$terminal['maakond']] = $terminal['group_id'];
            }
        }

        foreach ($rows as $i => &$row) {
            if ((int)$row->TYPE === self::TYPE_TERMINAL && $row->A0_NAME == self::ESTONIA) {

                $row->A1_NAME = str_replace('maakond', '', $row->A1_NAME);
                $row->MODIFIED = DateTime::createFromFormat('Y-m-dP', $row->MODIFIED);

                if (!isset($cities[$row->A1_NAME])) {
                    $cities[$row->A1_NAME] = count($cities) + 1;
                }

                if (isset($sorted_terminals[$row->NAME])) {
                    $updates[$sorted_terminals[$row->NAME]['id_vp_omniva']] = $row;
                } else {
                    $inserts[] = $row;
                }
            }
        }
        unset($rows);

        if (count($updates) !== count($sorted_terminals)) {
            foreach ($sorted_terminals as $terminal) {
                if (!isset($updates[$terminal['id_vp_omniva']])) {
                    $removes[] = $terminal['id_vp_omniva'];
                }
            }
        }
        unset($sorted_terminals);

        if (!empty($removes)) {
            Db::getInstance()->execute('UPDATE `' . _DB_PREFIX_ . $this->name . '` SET `active`=0  WHERE `id_vp_omniva` IN ('.implode(',', $removes).')');
        }

        $sql = 'INSERT INTO `' ._DB_PREFIX_ . $this->name . '` ' .
            '(`sihtnumber`, `name`, `address`, `asula`, ' .
            '`maakond`, `group_id`, `active`, `tyyp`, `muudetud`) VALUES ';

        $insert_queries = array();
        foreach ($inserts as $insert) {
            $query = sprintf('(\'%s\', \'%s\', \'%s\', \'%s\', \'%s\', %d, %d, %d, \'%s\')',
                $insert->ZIP,
                $insert->NAME,
                sprintf('%s %s, %s', $insert->A5_NAME, $insert->A7_NAME, $insert->A2_NAME),
                $insert->A2_NAME,
                $insert->A1_NAME,
                (int)$cities[$insert->A1_NAME],
                1,
                (int)$insert->TYPE,
                $insert->MODIFIED
            );
            $insert_queries[] = $query;
        }

        if (!empty($insert_queries)) {
            Db::getInstance()->execute($sql . join(', ', $insert_queries));
        }

        foreach ($updates as $office_id => $update) {
            Db::getInstance()->update(
                'vp_omniva',
                array(
                    'sihtnumber' => $update->ZIP,
                    'name' =>  $update->NAME,
                    'address' => sprintf('%s %s, %s', $update->A5_NAME, $update->A7_NAME, $update->A2_NAME),
                    'asula' => $update->A2_NAME,
                    'maakond' => $update->A1_NAME,
                    'group_id' => (int)$cities[$update->A1_NAME],
                    'active' => 1,
                    'tyyp' => $update->TYPE,
                    'muudetud' => $update->MODIFIED,
                ),
                'id_vp_omniva = '.(int)$office_id
            );
        }
    }

    public function createSizes()
    {
        $sizes = array(
            array(
                'name' => 'S',
                'height' => 8,
                'width' => 38,
                'depth' => 64,
                'price' => 2.32,
                'id_group' => 0,
                'price_from' => 0,
                'price_to' => 99999999.99
            ),
            array(
                'name' => 'M',
                'height' => 19,
                'width' => 38,
                'depth' => 64,
                'price' => 2.74,
                'id_group' => 0,
                'price_from' => 0,
                'price_to' => 99999999.99
            ),
            array(
                'name' => 'L',
                'height' => 41,
                'width' => 38,
                'depth' => 64,
                'price' => 3.30,
                'id_group' => 0,
                'price_from' => 0,
                'price_to' => 99999999.99
            )
        );
        foreach ($sizes as $size)
        {
            OmnivaSize::createSize($size)->add();
        }
    }
}
