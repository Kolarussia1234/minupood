<?php

class AdminCustomerGroupDiscountsController extends ModuleAdminController
{
    public static $map = [
        'default_value' => 'Vaikimisi',
        'fixed' => 'Fikseeritud hind',
        's_margin' => 'Väike marginaal',
        'lamp' => 'Pealambid',
        'compass' => 'Kompassid',
        'wholesale' => 'Jaemüügi kaup',
    ];

    public function __construct()
    {
        parent::__construct();

        $this->bootstrap = true;
    }

    public function postProcess()
    {
        if(!Tools::getValue('customer_group_discounts'))
            return true;

        if(!Tools::getValue('discounts'))
            return true;

        $discounts = Tools::getValue('discounts');

        foreach($discounts as $id_group => $discount) {
            foreach($discount as $key => &$value) {
                if (empty($value))
                    $value = '0.00';

                $value = str_replace(',','.',$value);
            }

            unset($value);
            Db::getInstance()->insert('vp_customer_group_discounts', array_replace(['id_group' => $id_group], $discount), false, false, Db::REPLACE);
        }
    }

    public function renderList()
    {
        $body = $this->getAllGroupDiscounts();

        $form_url = $this->context->link->getAdminLink('AdminCustomerGroupDiscounts', true);

        $this->context->smarty->assign(['body' => $body, 'form_url' => $form_url]);

        return $this->context->smarty->fetch($this->module->getLocalPath().'views/templates/admin/group_discounts.tpl');
    }

    public function getAllGroupDiscounts($with_header = true)
    {
        $sql = '
            SELECT vp.*
            FROM `'._DB_PREFIX_.'vp_customer_group_discounts` vp 
        ';

        if(!$results = Db::getInstance()->executeS($sql))
            return [];

        $body = [];

        foreach($results as $row) {
            $body[$row['id_group']] = $row;
            $body[$row['id_group']]['id_group'] = Db::getInstance()->getValue('SELECT gl.`name` FROM `' . _DB_PREFIX_ . 'group_lang` gl WHERE gl.`id_group` = ' . (int)$row['id_group']);
        }

        if($with_header)
            $body = array_replace($this->getGroupDiscountHeader(), $body);

        return $body;
    }

    public function getGroupDiscountHeader()
    {
        return [['#', $this->l('Vaikimisi'), $this->l('Fikseeritud hind'),
                      $this->l('Väike marginaal'), $this->l('Pealambid'),
                      $this->l('Kompassid'), $this->l('Jaemüügi kaup')]];
    }
}