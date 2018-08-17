<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class Vp_buumstocks extends Module
{
    protected $config_form = false;

    public function __construct()
    {
        $this->name = 'vp_buumstocks';
        $this->tab = 'migration_tools';
        $this->version = '1.0.0';
        $this->author = 'Veebipoed.ee';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Buum stocks');
        $this->description = $this->l('Veebipoed buum stock');

        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        include(dirname(__FILE__).'/sql/install.php');

        return parent::install() && Hook::registerHook($this, ['header', 'displayStockInShops', 'backOfficeHeader']);
    }

    public function hookHeader()
    {
        $this->context->controller->addCSS($this->_path.'/views/css/vp_boomstocks_front.css');
    }

    public static function updateWarehouse($values)
    {
        $result = Db::getInstance()->update('vp_buumstocks_warehouses', [
            'warehouse' => $values['warehouse'],
        ], 'WHERE shop_number = '.$values['shop_number']);

        return $result;
    }

    public static function getWarehouse($id)
    {
        $sql = 'SELECT `shop_number`, `warehouse`' .
            'FROM `' . _DB_PREFIX_ . 'vp_buumstocks_warehouses` WHERE `shop_number` = '. $id;

        return Db::getInstance()->getRow($sql);
    }

    public static function getWarehouses()
    {

        $sql = 'SELECT `shop_number`, `warehouse`' .
            'FROM `' . _DB_PREFIX_ . 'vp_buumstocks_warehouses`';

        return Db::getInstance()->executeS($sql);
    }
    /**
     * Load the configuration form
     */
    public function getContent()
    {

        $this->context->smarty->assign(
            array('link' => $this->context->link,
                'warehouses' =>  $this->getWarehouses()
            )
        );
        $form = '';
        /**
         * If values have been submitted in the form, process.
         */
        if (((bool)Tools::getValue('shop_number'))) {
            $warehouse = (int)Tools::getValue('shop_number');
            $form = $this->renderEditWarehouseForm($warehouse);
        }

        if (((bool)Tools::isSubmit('editWarehouse')) == true ) {
            $this->postWarehouseProcess();
        }

        $this->context->smarty->assign('module_dir', $this->_path);

        $output = $this->context->smarty->fetch($this->local_path.'views/templates/admin/configure.tpl');

        return $output . $form;
    }

    protected function renderEditWarehouseForm($id)
    {

        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'editWarehouse';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getWarehouseFormValues($id),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($this->getWarehouseForm()));
    }

    protected function getWarehouseFormValues($id)
    {
        $values = $this->getWarehouse($id);

        return array(
            'shop_number' => $id,
            'warehouse' =>  $values["warehouse"],
        );
    }

    /**
     * Create the structure of shop form.
     */
    protected function getWarehouseForm()
    {
        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Edit Warehouse'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'hidden',
                        'label' => $this->l('Warehouse ID'),
                        'name' => 'shop_number',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Warehouse Name'),
                        'name' => 'warehouse',
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
    protected function postWarehouseProcess()
    {
            $warehouse = array(
                'shop_number' => (int)Tools::getValue('shop_number'),
                'warehouse' =>   Tools::getValue('warehouse'),
            );

            $this->updateWarehouse($warehouse);


        $this->context->smarty->assign(
            array('link' => $this->context->link,
                'warehouses' =>  $this->getWarehouses()
            )
        );
    }


    public static function getStock($id_product)
    {
        $sql = 'SELECT `id_product`, `id_product_attribute`, `shop_number`' .
            'FROM `' . _DB_PREFIX_ . 'vp_buumstocks` WHERE `id_product` = '. $id_product;

        return Db::getInstance()->executeS($sql);
    }

    public function hookDisplayStockInShops($params)
    {
        try {
            $stocks = $this->getStock($params['product']['id_product']);
        } catch (PrestaShopException $e) {
            return;
        }

        $this->context->smarty->assign([
            'warehouses' =>  $this->getWarehouses(),
            'stock' => $stocks,
            'params' => $params
        ]);

        $output = $this->context->smarty->fetch($this->local_path.'views/templates/hook/warehouses.tpl');
        return $output;
    }

}