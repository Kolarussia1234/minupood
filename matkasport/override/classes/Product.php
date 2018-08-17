<?php

class Product extends ProductCore
{
    public $id_product_domino;

    public function __construct($id_product = null, $full = false, $id_lang = null, $id_shop = null, Context $context = null)
    {
        Product::$definition['fields']['id_product_domino'] = array(
            'type' => self::TYPE_STRING, 'validate' => 'isString', 'size' => 255
        );

        parent::__construct($id_product, $full, $id_lang, $id_shop, $context);
    }


}