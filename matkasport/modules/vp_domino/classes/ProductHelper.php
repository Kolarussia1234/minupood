<?php

class ProductHelper
{
    public static function getModelReference($string){
        $output = null;

        $ref = $string;

        if(substr($ref, 0, -1) != '%')
            $ref .= '%';

        preg_match('/(?<=mudel\$&\$)(.*)(?=%)/', $ref, $matches);

        if(!empty($matches))
            return $matches[0];

        return $ref;
    }

    public static function getCombinationIdByReference($idProduct, $reference)
    {
        if (empty($reference)) {
            return 0;
        }

        $query = new DbQuery();
        $query->select('pa.id_product_attribute');
        $query->from('product_attribute', 'pa');
        $query->where('pa.reference LIKE \'%'.pSQL($reference).'%\'');
        $query->where('pa.id_product = '.(int) $idProduct);

        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($query);

        return array_map('current', $result);
    }

    public static function getProductIdByReference($reference)
    {
        if(!is_array($reference))
            $reference = array($reference);

        $sql = '
            SELECT p.`id_product`, p.`reference`
            FROM `'._DB_PREFIX_.'product` p
            WHERE p.reference IN ("'.implode(',', $reference).'")
        ';

        try {
            $results = Db::getInstance()->executeS($sql);
        } catch (PrestaShopDatabaseException $e) {
            return 0;
        }

        if(!is_array($results) || empty($results))
            return 0;

        if(count($results) === 1)
            return [$results[0]['reference'] => $results[0]['id_product']];

        $return = array();

        foreach($results as $result) {
            $return[$result['reference']] = $result['id_product'];
        }

        return $return;
    }


}