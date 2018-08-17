<?php

class Image extends ImageCore
{
    public $url;
    public $model;

    public function __construct($id = null, $idLang = null)
    {
        Image::$definition['fields']['url'] = array(
            'type' => self::TYPE_STRING, 'validate' => 'isString'
        );

        Image::$definition['fields']['model'] = array(
            'type' => self::TYPE_STRING, 'validate' => 'isString'
        );

        parent::__construct($id, $idLang);
    }
}