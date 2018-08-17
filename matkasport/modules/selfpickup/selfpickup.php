<?php
/**
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2018 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

class Selfpickup extends CarrierModule
{
    protected $config_form = false;

    public function __construct()
    {
        $this->name = 'selfpickup';
        $this->tab = 'shipping_logistics';
        $this->version = '1.0.0';
        $this->author = 'Veebipoed';
        $this->need_instance = 0;
        $this->carrierid = null;

        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Selfpick Up');
        $this->description = $this->l('Allow the customer to come to the shop to pick up products');

        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
    }
    /**
     * Creates tables
     */
    protected function createTables()
    {
        /* Slides */
        $res = (bool)Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'selfpickup_addresses` (
                `id_shop_address` int(10) unsigned NOT NULL AUTO_INCREMENT,
	            `name` varchar(255) NOT NULL,
	            `address` varchar(255) NOT NULL,
	            `time` varchar(255) NOT NULL,
              PRIMARY KEY (`id_shop_address`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;
        ');

        return $res;
    }
    /**
     * deletes tables
     */
    protected function deleteTables()
    {
        return Db::getInstance()->execute('
            DROP TABLE IF EXISTS `'._DB_PREFIX_.'selfpickup_addresses`;
        ');
    }
    /**
     * Don't forget to create update methods if needed:
     * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
     */
    public function install()
    {
        if (parent::install() &&
            $this->registerHook('header') &&
            $this->registerHook('displayCarrierExtraContent') &&
            $this->registerHook('backOfficeHeader') &&
            $this->registerHook('updateCarrier') &&
            $this->registerHook('displayAdminOrderContentShip') &&
            $this->registerHook('displayCarrierList')
        ) {

            if (extension_loaded('curl') == false)
            {
                $this->_errors[] = $this->l('You have to enable the cURL extension on your server to install this module');
                return false;
            }

            $carrier = $this->addCarrier();
            $this->addZones($carrier);
            $this->addGroups($carrier);
            $this->addRanges($carrier);
            $this->carrierid = $carrier->id;
            Configuration::updateValue('SELFPICKUP_LIVE_MODE', false);

            /* Creates tables */
            $res = $this->createTables();

            /* Adds samples */
            if ($res) {
                $this->installSamples();
            }

            return (bool)$res;
        }

        return false;

    }

    /**
     * Adds samples
     */
    protected function installSamples()
    {

        $shops = array(
            array(
                'name' => 'Shop 1',
                'address' => 'Address 1',
                'time' => '10:00-18:00',
            ),
            array(
                'name' => 'Shop 2',
                'address' => 'Address 2',
                'time' => '10:00-18:00',
            ),
            array(
                'name' => 'Shop 3',
                'address' => 'Address 3',
                'time' => '10:00-18:00',
            ),
        );

        foreach ($shops as $shop) {
            $this->createShop($shop);
        }
    }
    public static function getShops()
    {

        $sql = 'SELECT `id_shop_address`, `name`, `address`, `time` ' .
            'FROM `' . _DB_PREFIX_ . 'selfpickup_addresses`';

        return Db::getInstance()->executeS($sql);
    }
    public static function getShop($id)
    {
        $sql = 'SELECT `id_shop_address`, `name`, `address`, `time` ' .
            'FROM `' . _DB_PREFIX_ . 'selfpickup_addresses` WHERE `id_shop_address` = '. $id;

        return Db::getInstance()->executeS($sql);
    }
    public static function deleteShop($id)
    {

        $sql = 'DELETE FROM `' . _DB_PREFIX_ . 'selfpickup_addresses` WHERE `id_shop_address` = '.$id;

        return Db::getInstance()->execute($sql);
    }
    public static function createShop($values)
    {
        $sql =  "INSERT INTO ". _DB_PREFIX_ ."selfpickup_addresses 
      (`id_shop_address`, `name`, `address`, `time`) 
      VALUES (NULL, '".$values['name']."', '".$values['address']."', '".$values['time']."')";
        $result = Db::getInstance()->execute($sql);
        return $result;

    }
    public static function updateShop($values)
    {
        $sql = "UPDATE ". _DB_PREFIX_ ."selfpickup_addresses SET name='".$values['name']."', address='".$values['address']."', time='".$values['time']."' WHERE id_shop_address=".$values['id_shop_address'];
        $result = Db::getInstance()->execute($sql);
        return $result;

    }

    public function uninstall()
    {
        /* Deletes Module */
        if (parent::uninstall()) {
            /* Deletes tables */
            $res = $this->deleteTables();
            Db::getInstance()->execute("DELETE FROM `ps_module` WHERE `name` = 'selfpickup'");
            Db::getInstance()->execute("DELETE FROM `ps_carrier` WHERE `external_module_name` = 'selfpickup'");

            /* Unsets configuration */
            $res &= Configuration::deleteByName('SELFPICKUP_LIVE_MODE');
            $res &= Configuration::deleteByName('SELFPICKUP_CARRIER_ID');

            return (bool)$res;
        }

        return false;
    }

    /**
     * Load the configuration form
     */
    public function getContent()
    {


        $this->context->smarty->assign(
            array('link' => $this->context->link,
                'shops' =>  $this->getShops()
            )
        );

        $form = $this->renderNewShopForm();
        /**
         * If values have been submitted in the form, process.
         */
        if (((bool)Tools::getValue('id_slide'))) {
            $id_slide = (int)Tools::getValue('id_slide');
            $form = $this->renderEditShopForm($id_slide);
        }

        if (((bool)Tools::getValue('delete_id_slide'))) {

            $values = $this->deleteShop(Tools::getValue('delete_id_slide'));
            $this->context->smarty->assign(
                array('link' => $this->context->link,
                    'shops' =>  $this->getShops()
                )
            );
        }
        if (((bool)Tools::isSubmit('editSelfPickShop')) == true || ((bool)Tools::isSubmit('submitSelfPickShop')) == true) {
            $this->postShopProcess();
        }

        $this->context->smarty->assign('module_dir', $this->_path);

        $output = $this->context->smarty->fetch($this->local_path.'views/templates/admin/configure.tpl');

        return $output . $form;
    }

    /**
     * Create the form that will be displayed in the configuration of your module.
     */
    protected function renderNewShopForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitSelfPickShop';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

            $helper->tpl_vars = array(
                'fields_value' => $this->getShopInfo(),
                'languages' => $this->context->controller->getLanguages(),
                'id_language' => $this->context->language->id,
            );


        return $helper->generateForm(array($this->getShopForm()));
    }
    protected function renderEditShopForm($id)
    {

        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'editSelfPickShop';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
            $helper->tpl_vars = array(
                'fields_value' => $this->getShopFormValues($id),
                'languages' => $this->context->controller->getLanguages(),
                'id_language' => $this->context->language->id,
            );



        return $helper->generateForm(array($this->getShopForm()));
    }

    protected function getShopFormValues($id)
    {
        $values = $this->getShop($id)[0];

        return array(
            'shop_id' => $id,
            'shop_name' =>  $values["name"],
            'shop_address' =>  $values["address"],
            'shop_time' =>  $values["time"],
        );
    }

    public function getShopInfo()
    {
        return array(
            'shop_id' => '',
            'shop_name' => '',
            'shop_address' =>  '',
            'shop_time' =>  '',
        );
    }


    /**
     * Create the structure of shop form.
     */
    protected function getShopForm()
    {
        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Add New Shop'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'hidden',
                        'label' => $this->l('Shop ID'),
                        'name' => 'shop_id',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Shop Name'),
                        'name' => 'shop_name',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Shop Address'),
                        'name' => 'shop_address',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Shop Opening Times'),
                        'name' => 'shop_time',
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );
    }

    /**
     * Save form data.
     */
    protected function postShopProcess()
    {
        if(Tools::getValue('shop_id') == '') {
            $shop = array(
              'name' =>   Tools::getValue('shop_name'),
              'address' =>   Tools::getValue('shop_address'),
              'time' =>   Tools::getValue('shop_time'),
            );

            $this->createShop($shop);

        } else {
            $shop = array(
                'id_shop_address' => (int)Tools::getValue('shop_id'),
                'name' =>   Tools::getValue('shop_name'),
                'address' =>   Tools::getValue('shop_address'),
                'time' =>   Tools::getValue('shop_time'),
            );

            $this->updateShop($shop);

        }

        $this->context->smarty->assign(
            array('link' => $this->context->link,
                'shops' =>  $this->getShops()
            )
        );
    }

    public function getOrderShippingCost($params, $shipping_cost)
    {
        if (Context::getContext()->customer->logged == true)
        {
            $id_address_delivery = Context::getContext()->cart->id_address_delivery;
            $address = new Address($id_address_delivery);

            /**
             * Send the details through the API
             * Return the price sent by the API
             */
            return 10;
        }

        return $shipping_cost;
    }

    public function getOrderShippingCostExternal($params)
    {
        return true;
    }

    protected function addCarrier()
    {
        $carrier = new Carrier();

        $carrier->name = $this->l('Selfpickup');
        $carrier->is_module = true;
        $carrier->active = 1;
        $carrier->range_behavior = 1;
        $carrier->need_range = 1;
        $carrier->shipping_external = true;
        $carrier->range_behavior = 0;
        $carrier->external_module_name = $this->name;
        $carrier->shipping_method = 2;

        foreach (Language::getLanguages() as $lang)
            $carrier->delay[$lang['id_lang']] = $this->l('Tuled ise poodi j2rele');

        if ($carrier->add() == true)
        {
            @copy(dirname(__FILE__).'/views/img/carrier_image.jpg', _PS_SHIP_IMG_DIR_.'/'.(int)$carrier->id.'.jpg');
            Configuration::updateValue('SELFPICKUP_CARRIER_ID', (int)$carrier->id);
            return $carrier;
        }

        return false;
    }

    protected function addGroups($carrier)
    {
        $groups_ids = array();
        $groups = Group::getGroups(Context::getContext()->language->id);
        foreach ($groups as $group)
            $groups_ids[] = $group['id_group'];

        $carrier->setGroups($groups_ids);
    }

    protected function addRanges($carrier)
    {
        $range_price = new RangePrice();
        $range_price->id_carrier = $carrier->id;
        $range_price->delimiter1 = '0';
        $range_price->delimiter2 = '10000';
        $range_price->add();

        $range_weight = new RangeWeight();
        $range_weight->id_carrier = $carrier->id;
        $range_weight->delimiter1 = '0';
        $range_weight->delimiter2 = '10000';
        $range_weight->add();
    }

    protected function addZones($carrier)
    {
        $zones = Zone::getZones();

        foreach ($zones as $zone)
            $carrier->addZone($zone['id_zone']);
    }

    /**
    * Add the CSS & JavaScript files you want to be loaded in the BO.
    */
    public function hookBackOfficeHeader()
    {
        if (Tools::getValue('module_name') == $this->name) {
            $this->context->controller->addJS($this->_path.'views/js/back.js');
            $this->context->controller->addCSS($this->_path.'views/css/back.css');
        }
    }

    /**
     * Add the CSS & JavaScript files you want to be added on the FO.
     */
    public function hookHeader()
    {
        $this->context->controller->addJS($this->_path.'/views/js/front.js');
        $this->context->controller->addCSS($this->_path.'/views/css/front.css');
    }

    public function hookUpdateCarrier($params)
    {
        /**
         * Not needed since 1.5
         * You can identify the carrier by the id_reference
        */
    }

    public function hookDisplayAdminOrderContentShip()
    {
        /* Place your code here. */
    }



    public function hookDisplayCarrierExtraContent()
    {
        $output = '';

        $this->context->smarty->assign(
            array(
                'shops' =>  $this->getShops()
            )
        );


        $output = $this->context->smarty->fetch($this->local_path.'views/templates/hook/shops.tpl');
        return $output;
    }
}
