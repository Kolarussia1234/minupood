<?php

class Order extends OrderCore
{
    public static function generateReference()
    {
        $pad = 0;
        $start = 'W';
        $input = 1+Db::getInstance()->getValue('SELECT MAX(id_order) FROM ps_orders');
        $ref_length = 9 - strlen($start);

        return $start.str_pad($input, $ref_length, $pad, STR_PAD_LEFT);
    }
}