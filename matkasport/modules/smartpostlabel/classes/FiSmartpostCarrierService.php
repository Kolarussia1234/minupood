<?php

class FiSmartPostCarrierService implements CarrierSeriveInterface
{
    public function setAddressInfo(&$destination, Order $order)
    {
        $sql = 'SELECT s.`postal_code`, s.`routing_code` ' .
            'FROM `%1$sfismartpost_order` so ' .
            'LEFT JOIN `%1$sfismartpost` s ' .
            'ON s.`id_fismartpost`=so.`id_fismartpost`' .
            'WHERE so.`id_order`=%2$d';
        $row = Db::getInstance()->getRow(sprintf($sql, _DB_PREFIX_, $order->id));
        $return = true;

        if ($row) {
            $destination->addChild('postalcode', $row['postal_code']);
            $destination->addChild('routingcode', $row['routing_code']);
        } else {
            $return = false;
        }

        return $return;
    }
}
