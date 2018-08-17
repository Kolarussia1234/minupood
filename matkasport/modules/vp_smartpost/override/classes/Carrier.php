<?php

class Carrier extends CarrierCore
{
    public $veebipoed_name;
    public $old_name;

    public function __construct($id = null, $id_lang = null)
    {
        parent::__construct($id, $id_lang);

        $controller = Context::getContext()->controller;

        if ($this->is_module &&
            !is_a($controller, 'AdminCarrierWizardController') &&
            !is_a($controller, 'AdminCarriersController')
        ) {

            $this->old_name = $this->name;
            unset($this->name);
        }
    }

    public function __get($name)
    {
        if ($name == 'name') {
            if (isset($this->veebipoed_name)) {
                return $this->veebipoed_name;
            }

            $this->modifyName();

            if (isset($this->veebipoed_name)) {
                return $this->veebipoed_name;
            }

            return $this->old_name;
        }
    }

    public function __set($name, $value)
    {
        if ($name == 'name') {
            $this->old_name = $value;
        } else {
            $this->{$name} = $value;
        }
    }

    public function __isset($key)
    {
        if ($key == 'name') {
            return true;
        } else {
            return false;
        }
    }

    private function modifyName()
    {
        $id_order = 0;

        if (Tools::getIsset('id_order')) {
            $id_order = Tools::getValue('id_order');
        } elseif (Tools::getIsset('order_reference')) {
            $orders = Order::getByReference(Tools::getValue('order_reference'));
            $id_order = $orders[0]->id;
        } elseif (Tools::getIsset('id_order_invoice')) {
            $order_carrier = new OrderInvoice(Tools::getValue('id_order_invoice'));
            $id_order = $order_carrier->id_order;
        }

        $params = array(
            'carrier' => $this,
            'id_order' => $id_order
        );
        $new_name = $this->old_name . Hook::exec('modifyName', $params);
        if (!empty($new_name) && $this->old_name != $new_name) {
            $this->veebipoed_name = $new_name;
        }
    }
}
