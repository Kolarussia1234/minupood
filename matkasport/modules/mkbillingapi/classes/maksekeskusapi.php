<?php

class MaksekeskusApi
{
	private $_secret_key;
	private $_shop_id;
	private $_publishable_key;
	private $_url;

	private $response;

	public function __construct($secret_key, $publishable_key, $shop_id, $url)
	{
		$this->_secret_key = $secret_key;
		$this->_publishable_key = $publishable_key;
		$this->_shop_id = $shop_id;
		$this->_url = $url;
	}

	public function getPaymentMethods($params = array())
	{
		$url = $this->getUrl('methods', $params);

		$this->doRequest($url);
		$this->parseResponse();

		return $this->response;
	}

	public function createTransaction(Array $transaction)
	{
		$url = $this->getUrl('transactions');
		$this->doRequest($url, true, $transaction);
		$this->parseResponse();

		return $this->response;
	}

	public function getTransaction($transaction_id)
	{
		$url = $this->getUrl(sprintf('transactions/%s', $transaction_id));
		$this->doRequest($url, true);
		$this->parseResponse();

		return $this->response;
	}

	public function createPayment($transaction_id, Array $data)
	{
		$url = $this->getUrl(sprintf('transactions/%s/payments', $transaction_id));
		$this->doRequest($url, true, $data);
		$this->parseResponse();

		return $this->response;
	}

	private function doRequest($url, $with_secret = false, $params = array())
	{
		$curl = curl_init();

		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_TIMEOUT, 300);
		curl_setopt($curl, CURLOPT_SSLVERSION, 1);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 1);
		curl_setopt($curl, CURLOPT_CAINFO, dirname(dirname(__FILE__)).'/certs/ca-bundle.crt');

		if (!empty($params))
		{
			$data = Tools::jsonEncode($params);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
			curl_setopt($curl, CURLOPT_HTTPHEADER, array(                                                                          
				'Content-Type: application/json',                                                                                
				'Content-Length: '.Tools::strlen($data))                                                                       
			);
		}

		if ($with_secret)
		{
			curl_setopt($curl, CURLOPT_USERPWD, $this->_shop_id.':'.$this->_secret_key);
		}
		else
		{
			curl_setopt($curl, CURLOPT_USERPWD, $this->_publishable_key);
		}
		
		$this->response = curl_exec($curl);
		
		curl_close($curl);
	}

	private function parseResponse()
	{
		if (!empty($this->response))
		{
			$this->response = Tools::jsonDecode($this->response);
			if (!empty($this->response->errors))
			{
				$this->response = null;
			}
		}
	}

	private function getUrl($type, $params = array())
	{
		$url =  $this->_url.$type;
		
		if (!empty($params))
		{
			$url .= '?';
			$url .= http_build_query($params);
		}

		return $url;
	}
}