<?php

class SmartCarrierService implements CarrierSeriveInterface
{
    public function setAddressInfo(&$destination, Order $order)
    {
        $sql = 'SELECT id_smartcarrier ' .
            'FROM %1$ssmartcarrier_order ' .
            'WHERE id_order=%2$d';
        $timewindow = Db::getInstance()->getValue(sprintf($sql, _DB_PREFIX_, $order->id));
        $address = new Address($order->id_address_delivery);
        $country = new Country($address->id_country, $order->id_lang);
        $addressParser = new AddressParser();
        $return = true;

        if ($timewindow && $addressParser->parseObject($address)) {
            $parsedAddress = $addressParser->getAddress();

            $destination->addChild('country', $country->name); // In what format ? 3 letter iso ? 2 letter iso ? fullname ? ID ?
            $destination->addChild('street', $parsedAddress['street']);
            $destination->addChild('house', $parsedAddress['house']);
            $destination->addChild('apartment', $parsedAddress['apartment']);
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
