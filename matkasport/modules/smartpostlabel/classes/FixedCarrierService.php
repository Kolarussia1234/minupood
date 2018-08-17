<?php

class FixedCarrierService implements CarrierSeriveInterface
{
    protected $steet;
    protected $house;
    protected $apartment;

    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    public function setHouse($house)
    {
        $this->house = $house;
        return $this;
    }

    public function setApartment($apartment)
    {
        $this->apartment = $apartment;
        return $this;
    }

    /**
     *  A lot duplicated code from SmartCarrierService
     */
    public function setAddressInfo(&$destination, Order $order)
    {
        $sql = 'SELECT id_smartcarrier ' .
            'FROM %1$ssmartcarrier_order ' .
            'WHERE id_order=%2$d';
        $timewindow = Db::getInstance()->getValue(sprintf($sql, _DB_PREFIX_, $order->id));
        $address = new Address($order->id_address_delivery);
        $country = new Country($address->id_country, $order->id_lang);
        $return = true;

        if ($timewindow) {
            $destination->addChild('country', $country->name); // In what format ? 3 letter iso ? 2 letter iso ? fullname ? ID ?
            $destination->addChild('street', $this->street);
            $destination->addChild('house', $this->house);
            $destination->addChild('apartment', $this->apartment);
            $destination->addChild('timewindow', $timewindow + 1);
            $destination->addChild('postalcode', $address->postcode);
            $destination->addChild('city', $address->city);
            $destination->addChild('details', '');
        } else {
            $return = false;
        }

        return $return;
    }
}
