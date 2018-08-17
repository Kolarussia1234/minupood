<?php
/** NOTICE OF LICENSE
 *
 * This module was created by veebipoed.ee and is protected by the laws of Copyright.
 * This use license is granted for only one website.
 * To use this module on several websites, you must purchase as many licenses as websites on which you want to use it.
 * Use, copy, modification or distribution of this module without written license agreement from veebipoed.ee is strictly forbidden.
 * In order to obtain a license, please contact us: info@veebipoed.ee
 * Any infringement of these provisions as well as general copyrights will be prosecuted.
 * ...........................................................................
 *
 *
 * @author     VEEBIPOED.EE
 * @copyright  Copyright (c) 2012-2018 veebipoed.ee (http://www.veebipoed.ee)
 * @license    Commercial license
 * Support by mail: info@veebipoed.ee
 */

if (!class_exists('VeebipoedCarrierModel')) 
    require _PS_MODULE_DIR_ .'/vp_smartpost/libs/veebipoed_carrier_model.php';


if (!class_exists('VeebipoedCarrierModule')) 
    require _PS_MODULE_DIR_ .'/vp_smartpost/libs/veebipoed_carrier_module.php';


class SmartPostSize extends VeebipoedCarrierModel
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
        'table' => 'vp_smartpost_size',
        'primary' => 'id_vp_smartpost_size',
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

class vp_smartpost extends VeebipoedCarrierModule
{
    public $id_carrier;
    private $url = 'http://www.smartpost.ee/places.csv';

    public function __construct()
    {
        $this->name = 'vp_smartpost'; //module name
        $this->tab = 'shipping_logistics';
        $this->version = '3.0.1';
        $this->author = 'Veebipoed.ee';
        $this->need_instance = 0;
        $this->module_key = '909c86d8c5b9b012d43fa56c12acf39f';

        parent::__construct();

        $this->displayName = $this->l('SmartPost');
        $this->description = $this->l('Creates SmartPost carrier that allows Your customers to choose terminal from list and calculates parcel price according to goods dimensions');
    }

    public function hasSizes()
    {
        return SmartPostSize::getSizes();
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
        return 60;
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
        return 'AdminSmartpost';
    }

    public function getFreeShippingBoxName()
    {
        return 'groupBox';
    }

    public function getCityField()
    {
        return 'group_name';
    }

    public function getSizes($include_deleted, $id_group, $orderTotal)
    {
        return SmartPostSize::getSizes($include_deleted, $id_group, $orderTotal);
    }

    public function getTerminals($params = array())
    {
        $where = array();
        foreach ($params as $param) {
            $where[] = sprintf('`%s`%s%s', $param[0], $param[1], pSQL($param[2]));
        }

        $sql = 'SELECT `id_%2$s`, `place_id`, `name`, `city`, `address`, `opened`, `group_id`,
            `group_name`, `group_sort`, `active`, `updated_date`
            FROM `%1$s%2$s`'.
            ($where ? ' WHERE '.implode(' AND ', $where) : '').
            ' ORDER BY `group_sort` DESC, `name` ASC;';

        return Db::getInstance()->executeS(sprintf($sql, _DB_PREFIX_, $this->name));
    }

    public function getGroupNames()
    {
        $sql = 'SELECT DISTINCT `group_id`, `group_name`, `group_sort`
            FROM `%1$s%2$s`
            WHERE `active` = 1
            ORDER BY `group_sort` DESC;';

        return Db::getInstance()->executeS(sprintf($sql, _DB_PREFIX_, $this->name));
    }

    public function hookDisplayAdminsmartpostOptions($params)
    {
        $groups =  Group::getGroups($this->context->language->id);
        $selectedGroups = array();
        if (Tools::isSubmit('submitOptionssmartpost_size')) 
        {
            Configuration::updateValue(
                $this->prefixed($this->getFreeShippingBoxName()),
                implode(',', Tools::getValue($this->getFreeShippingBoxName(), array()))
            );
        }

        $selectedGroups = $this->getFreeShippingGroups();
        foreach ($groups as &$value) {
            if (isset($selectedGroups[$value['id_group']])) 
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
        $rowsToImport = array(
            'place_id' => 0,
            'name' => 1,
            'city' => 2,
            'address' => 3,
            'opened' => 4,
            'group_id' => 5,
            'group_name' => 6,
            'group_sort' => 7,
            'active' => 9,
            'updated_date' => 12
        );

        $response = Tools::file_get_contents($this->url);

        $rows = preg_split('/$\R?^/m', $response);
        $inserts = array();
        $updates = array();
        $removes = array();
        $terminals = $this->getTerminals();
        $sorted_terminals = array();

        if ($terminals) {
            foreach ($terminals as $terminal) {
                $sorted_terminals[$terminal['place_id']] = $terminal;
            }
        }

        foreach ($rows as $i => $row) {
            $columns = str_getcsv($row);
            if ($i === 0) {
                continue;
            } else {
                if (isset($sorted_terminals[$columns[$rowsToImport['place_id']]])) {
                    $updates[$columns[$rowsToImport['place_id']]] = $columns;
                } else {
                    $inserts[$columns[$rowsToImport['place_id']]] = $columns;
                }
            }
        }

        if (count($updates) !== count($sorted_terminals)) {
            foreach ($sorted_terminals as $place_id => $terminal) {
                if (!isset($updates[$place_id])) {
                    $removes[] = $place_id;
                }
            }
            unset($terminal);
        }


        $sql = 'INSERT INTO `' ._DB_PREFIX_ . $this->name . '` ' .
            '(`place_id`, `name`, `city`, `address`, `opened`, `group_id`, ' .
            '`group_name`, `group_sort`, `active`, `updated_date`) VALUES ';

        $insert_queries = array();
        foreach ($inserts as $insert) {
            $query = sprintf(
                '(%d, \'%s\', \'%s\', \'%s\', \'%s\', %d, \'%s\', %d, %d, \'%s\')',
                (int)$insert[$rowsToImport['place_id']],
                $insert[$rowsToImport['name']],
                $insert[$rowsToImport['city']],
                $insert[$rowsToImport['address']],
                $insert[$rowsToImport['opened']],
                (int)$insert[$rowsToImport['group_id']],
                $insert[$rowsToImport['group_name']],
                (int)$insert[$rowsToImport['group_sort']],
                (int)$insert[$rowsToImport['active']],
                $insert[$rowsToImport['updated_date']]
            );
            $insert_queries[] = $query;
        }

        if (!empty($insert_queries)) {
            Db::getInstance()->execute($sql . join(', ', $insert_queries));
        }

        if (!empty($removes)) {
            Db::getInstance()->execute(sprintf(
                'UPDATE `%s%s` SET `active`=0 WHERE `place_id` IN (%s)',
                _DB_PREFIX_,
                $this->name,
                implode(',', $removes)
            ));
        }

        $sql = 'UPDATE `' . _DB_PREFIX_ . $this->name . '` SET ';
        $sql_where_template = ' WHERE place_id = %d';
        foreach ($updates as $update) {
            $changedValues = array();
            $sql_values = array();
            $current_terminal = $sorted_terminals[$update[$rowsToImport['place_id']]];
            foreach ($rowsToImport as $key => $loc) {
                if ($update[$loc] != $current_terminal[$key]) {
                    $changedValues[$key] = $update[$loc];
                }
            }

            if (!empty($changedValues)) {
                foreach ($changedValues as $key => $value) {
                    if (is_numeric($value)) {
                        $sql_values[] = $key . '=' . $value;
                    } else {
                        $sql_values[] = $key . '=\'' . $value . '\'';
                    }
                }

                $sql_where = sprintf($sql_where_template, (int)$update[$rowsToImport['place_id']]);
                Db::getInstance()->execute($sql . join(', ', $sql_values) . $sql_where);
            }
        }
    }

    public function createSizes()
    {
        $sizes = array(
            array(
                'name' => 'XS',
                'height' => 5,
                'width' => 36,
                'depth' => 45,
                'price' => 2,
                'id_group' => 0,
                'price_from' => 0,
                'price_to' => 99999999.99
            ),
            array(
                'name' => 'S',
                'height' => 12,
                'width' => 36,
                'depth' => 60,
                'price' => 2.46,
                'id_group' => 0,
                'price_from' => 0,
                'price_to' => 99999999.99
            ),
            array(
                'name' => 'M',
                'height' => 20,
                'width' => 36,
                'depth' => 60,
                'price' => 3.08,
                'id_group' => 0,
                'price_from' => 0,
                'price_to' => 99999999.99
            ),
            array(
                'name' => 'X',
                'height' => 38,
                'width' => 36,
                'depth' => 60,
                'price' => 3.87,
                'id_group' => 0,
                'price_from' => 0,
                'price_to' => 99999999.99
            ),
            array(
                'name' => 'XL',
                'height' => 60,
                'width' => 36,
                'depth' => 60,
                'price' => 5.12,
                'id_group' => 0,
                'price_from' => 0,
                'price_to' => 99999999.99
            )
        );

        foreach ($sizes as $size) {
            SmartPostSize::createSize($size)->add();
        }
    }
}
