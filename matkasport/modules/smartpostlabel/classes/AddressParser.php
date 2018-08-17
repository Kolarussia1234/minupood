<?php

class AddressParser
{
    protected $address;

    private function resetAddress()
    {
        $this->address = array(
            'house' => '',
            'street' => '',
            'apartment' => '',
        );
    }

    /**
     * extract address from string
     * @param  Address $address
     * @return bool successful
     */
    public function parseObject(Address $addressObj)
    {
        $this->resetAddress();
        $address = $addressObj->address1.' '.$addressObj->address2;

        return $this->parseString($address);
    }

    private function parseString($address)
    {
        $regex = '/^[0-9]{1,}[a-zA-Z]{0,1}$/';

        $pieces = explode(' ', trim($address));

        $number = end($pieces);
        unset($pieces[count($pieces) - 1]);
        $numbers = explode('-', $number);

        $this->address['street'] = implode(' ', $pieces);

        if (isset($numbers[0]) && preg_match($regex, $numbers[0])) {
            $this->address['house'] = $numbers[0];
        }

        if (isset($numbers[1]) && preg_match($regex, $numbers[1])) {
            $this->address['apartment'] = $numbers[1];
        }

        return (!empty($number[0]) && !empty($number[1]));
    }

    /**
     * @return array   array(
     *                     'apartment'  => 1,
     *                     'house'      => 21,
     *                     'street'     => 'Kruusa',
     *                 )
     */
    public function getAddress()
    {
        return $this->address;
    }
}
