<?php

interface CarrierSeriveInterface
{
    public function setAddressInfo(&$destination, Order $order);
}
