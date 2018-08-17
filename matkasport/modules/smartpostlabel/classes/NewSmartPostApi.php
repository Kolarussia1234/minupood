<?php

class NewSmartPostApi
{
    const ENDPOINT_URL = 'http://iseteenindus.smartpost.ee/api/';

    const SUCCESS_CODE = 200;
    const ERROR_CODE = 400;

    private $username;
    private $password;

    private $module;

    private $errors = array();
    private $response;
    private $response_code;

    private $error_codes = array(
        'destination info missing',
        'required input missing (generic, field name included in <field>)',
        'barcode already exists',
        'not a phone number',
        'not an e-mail address',
        'not numberic',
        'unknown destination (place_id)',
        'express cheked but destination is not a express APT',
        'multiple destinations set',
        'courier service timeframe missing',
        'courier service city missing',
        'courier service postalcode missing',
        'Courier address missing',
        'COD used but service not available',
        'Invalid door size',
    );

    public function __construct($username, $password, Module $module)
    {
        $this->username = $username;
        $this->password = $password;
        $this->module = $module;
    }

    private function getUrl($query_params = array())
    {
        return self::ENDPOINT_URL.(empty($query_params) ? '' : '?'.http_build_query($query_params));
    }

    private function doRequest($url, $data)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        if (!empty($data)) {
            $auth = $data->addChild('authentication');
            $auth->addChild('user', $this->username);
            $auth->addChild('password', $this->password);

            curl_setopt($ch, CURLOPT_POSTFIELDS, $data->asXML());
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT , 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);

        $this->response = curl_exec($ch);
        $this->response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);
    }

    private function parseRespons()
    {
        $this->module->writeLog($this->response);
        $xml = simplexml_load_string($this->response);
        $this->response = null;

        if ($this->response_code == self::SUCCESS_CODE) {
            $this->response = $xml;
        } else if ($this->response_code == self::ERROR_CODE) {
            $code = (int)$xml->item->error->code;
            if (isset($this->error_codes[$code])) {
                $this->errors[] = $this->error_codes[$code];
            } else {
                $this->errors[] = 'Unknown error';
            }
        } else {
            $this->errors[] = 'Unknown response';
        }
    }

    private function getResult()
    {
        $response = array();

        if (!empty($this->errors)) {
            $response['error'] = true;
            $response['data'] = $this->errors;
            $this->errors = array();
        } else {
            $response['error'] = false;
            $response['data'] = $this->response;
            $this->response = null;
        }

        return $response;
    }

    public function getLabel($barcode)
    {
        $url = $this->getUrl(array('request' => 'labels'));

        $data = new SimpleXMLElement('<labels></labels>');
        $data->addChild('format', 'A5');
        $data->addChild('barcode', $barcode);

        $this->doRequest($url, $data);
        if ($this->response_code == self::SUCCESS_CODE) {
            return $this->response;
        } else {
            return false;
        }
    }

    public function trackOrders($orders)
    {
        $url = $this->getUrl(array('request' => 'tracking'));

        $data = new SimpleXMLElement('<orders></orders>');
        foreach ($orders as $id_order) {
            $item = $data->addChild('item');
            $item->addChild('reference', $id_order);
        }

        $this->doRequest($url, $data);
        $this->parseRespons();
        return $this->getResult();
    }

    public function sendOrderData($data)
    {
        $url = $this->getUrl(array('request' => 'shipment'));
        $this->doRequest($url, $data);
        $this->parseRespons();
        return $this->getResult();
    }
}
