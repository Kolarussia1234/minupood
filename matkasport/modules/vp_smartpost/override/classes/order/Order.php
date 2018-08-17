<?php

class Order extends OrderCore
{
    public function getShipping()
    {
        $context = Context::getContext();
        $shipping =  Db::getInstance()->executeS(
            'SELECT DISTINCT o.id_cart, oc.`id_order_invoice`, oc.`weight`,
            oc.`shipping_cost_tax_excl`, oc.`shipping_cost_tax_incl`, c.`url`, oc.`id_carrier`,
            c.`name` as `carrier_name`, c.external_module_name, oc.`date_add`, "Delivery" as `type`,
            "true" as `can_edit`, oc.`tracking_number`, oc.`id_order_carrier`, osl.`name` as order_state_name,
            c.`name` as state_name
            FROM `'._DB_PREFIX_.'orders` o
            LEFT JOIN `'._DB_PREFIX_.'order_history` oh
                ON (o.`id_order` = oh.`id_order`)
            LEFT JOIN `'._DB_PREFIX_.'order_carrier` oc
                ON (o.`id_order` = oc.`id_order`)
            LEFT JOIN `'._DB_PREFIX_.'carrier` c
                ON (oc.`id_carrier` = c.`id_carrier`)
            LEFT JOIN `'._DB_PREFIX_.'order_state_lang` osl
                ON (oh.`id_order_state` = osl.`id_order_state` AND osl.`id_lang` = '.(int)$context->language->id.')
            WHERE o.`id_order` = '.(int)$this->id.'
            GROUP BY c.id_carrier'
        );
        
        foreach ($shipping as &$row) {
            $carrier = new Carrier();
            $carrier->id = $row['id_carrier'];
            $carrier->external_module_name = $row['external_module_name'];
            $carrier->name = $row['carrier_name'];

            $params = array(
                'carrier' => $carrier,
                'id_order' => $this->id
            );
            $row['carrier_name'] .= Hook::exec('modifyName', $params);
            //$row['state_name'] = $row['carrier_name'];
        }
        return $shipping;
    }
}
