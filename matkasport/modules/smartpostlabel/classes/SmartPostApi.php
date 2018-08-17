<?php

class SmartPostApi
{
    private $username;
    private $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    private function getUrl($table, $type = 'phpserialize')
    {
        $url_tpl =  'http://%s:%s@eteenindus.smartpost.ee/data/%s.' . $type;

        return sprintf(
            $url_tpl,
            $this->username,
            $this->password,
            $table
        );
    }

    public function getChanges($datetime)
    {
        $url = $this->getUrl('changes').'pdf?where=changetime>x1&x1='.urlencode($datetime);
        $data = file_get_contents($url);
        return unserialize($data);
    }

    public function getLabel($barcode)
    {
        return $this->getUrl('label').'pdf?where=barcode='.$barcode;
    }

    public function sendOrderData($data)
    {
        $url = $this->getBaseSmartpostUrl('orders', true);
        $data = serialize($data);
        return file_get_contents($url . $data);
    }

    private function getData($table)
    {
        $url = $this->getBaseSmartpostUrl($table);
        $data = file_get_contents($url);
        return unserialize($data);
    }
}
