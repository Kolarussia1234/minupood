<?php

class SmartPostCarrierService implements CarrierSeriveInterface
{
    public function setAddressInfo(&$destination, Order $order)
    {
        $sql = 'SELECT s.`place_id` ' .
            'FROM `%1$svp_smartpost_order` so ' .
            'LEFT JOIN `%1$svp_smartpost` s ' .
            'ON s.`id_vp_smartpost`=so.`id_vp_smartpost`' .
            'WHERE so.`id_order`=%2$d';
        $place_id = Db::getInstance()->getValue(sprintf($sql, _DB_PREFIX_, $order->id));
        $return = true;

        if ($place_id) {
            $destination->addChild('place_id', $place_id);
        } else {
            $return = false;
        }

        return $return;
    }
}
