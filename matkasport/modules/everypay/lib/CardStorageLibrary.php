<?php

class CardStorageLibrary
{
	private $dbFields = array("id_card", "id_customer", "is_default", "card_no", "card_exp_year", "card_exp_month", "card_type", "date_added", "token");
	private $_loaded = false;
	public static $cardTypes = array("visa"=>"visa", "master_card"=>"mastercard");

	public $id_card;
	public $id_customer;
	public $is_default;
	public $card_no;
	public $card_exp_year;
	public $card_exp_month;
	public $card_type;
	public $date_added;
	public $token;

	public function __construct($id_card = null)
	{
		$this->_loaded = true;
		if ($id_card !== null){
			$card = $this->getCard($id_card);
			if ($card){
				foreach ($card as $key=>$val){
					$this->{$key}=$val;
				}
			}
		}
	}

	public function doesExist()
	{
		if (!isset($this->id_customer)) return false;
		$result=Db::getInstance()->executeS("SELECT id_card FROM "._DB_PREFIX_."everypay_cards WHERE card_exp_year='".$this->card_exp_year."' AND card_exp_month='".$this->card_exp_month."' AND card_no='".$this->card_no."' AND id_customer=".$this->id_customer);
		if (count($result)>0) return true;
		return false;
	}

	public static function removeDefault($id_customer)
	{
		$sql = "UPDATE "._DB_PREFIX_."everypay_cards SET is_default=0 WHERE id_customer=".$id_customer." AND is_default=1";
		Db::getInstance()->Execute($sql);
	}

	public function remove()
	{
		if (!isset($this->id_customer)) return false;
		if (!isset($this->card_no)) return false;
		if (!isset($this->id_card)) return false;
		$sql = "DELETE FROM "._DB_PREFIX_."everypay_cards WHERE id_card=".$this->id_card;
		Db::getInstance()->Execute($sql);
	}

	public function save()
	{
		if (!isset($this->id_customer)) return false;
		if (!isset($this->card_no)) return false;
		if ($this->_loaded == true){
			if (isset($this->id_card)){
				$cols = array();
				foreach ((array)$this->dbFields as $field)
				{
					$cols[] = $field."='".$this->{$field}."'";
				}
				$sql = "UPDATE "._DB_PREFIX_."everypay_cards SET ";
				$sql .= join(",", $cols);
				$sql .= " WHERE id_card=".$this->id_card;
				Db::getInstance()->Execute($sql);
			}else{
				$this->date_added = date("Y-m-d");
				$cols = array();
				$presets = array();
				foreach ((array)$this->dbFields as $field)
				{
					if (isset($this->{$field})){
						$presets[] = $field;
						$cols[] = "'".$this->{$field}."'";
					}
				}
				$sql = "INSERT INTO "._DB_PREFIX_."everypay_cards (";
				$sql .= join(",",$presets).") VALUES (".join(",", $cols).")";
				Db::getInstance()->Execute($sql);
			}
		}
		return true;
	}

	public static function getCards($id_customer = null)
	{
		if ($id_customer == null) return false;
		$result=Db::getInstance()->executeS("SELECT id_card FROM "._DB_PREFIX_."everypay_cards WHERE id_customer=".$id_customer);
		$return = array();
		foreach ((array)$result as $row)
		{
			$card = new CardStorageLibrary($row['id_card']);
			// Tools::dieObject($card);
			if (!isset($card->card_exp_year)) 
			{
				continue;
			}
			
			if (intval($card->card_exp_year) >= intval(date("Y")))
			{
				if (intval($card->card_exp_month) < intval(date("m")) && intval($card->card_exp_year) == intval(date("Y")))
				{
					continue;
				}
				else
				{
					$return[] = $card;
				}
			}
		}
		return self::confirmDefaultCard($return);
	}

	private static function confirmDefaultCard($cards)
	{
		foreach ((array)$cards as $key=>$card)
		{
			if ($card->is_default) return $cards;
		}
		if (count($cards)>0){
			$cards[0]->is_default = 1;
			return $cards;
		}
		return $cards;
	}

	public function getCard($id_card)
	{
		$result=Db::getInstance()->executeS("SELECT * FROM "._DB_PREFIX_."everypay_cards WHERE id_card=".$id_card);
		if (count($result)>0){
			$card = (object)$result[0];
			return $card;
		}
	}

}

?>