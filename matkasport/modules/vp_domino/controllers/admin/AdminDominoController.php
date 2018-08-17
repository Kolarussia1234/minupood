<?php

class AdminDominoController extends ModuleAdminController
{
    public function postProcess()
    {
        if(!Tools::getValue('exportOrder'))
            return;

        $order = new Order(Tools::getValue('id_order'));
        $orderState = new OrderState($order->current_state);

        $domino = new VpDomino();

        $domino->exportOrder($order->id, $orderState);

        die(json_encode(1));
    }
}