<?php

class smartpostlabelcronModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();
        $orders = $this->getSmartpostOrders();
        $api = $this->module->getSmartPostApi();

        if (!is_null($api) && !empty($orders)) {
            $id_shipped_order_state = $this->module->getConfig('shipped_state');
            $id_terminal_order_state = $this->module->getConfig('terminal_state');
            $last_sync_ts = (int)$this->module->getConfig('last_ts');

            $result = $api->trackOrders(array_keys($orders));

            if (!empty($result)) {
                foreach ($result['data']->item as $item) {
                    $id_order_state = 0;
                    if ((int)$item->destinationout > $last_sync_ts) {
                        $id_order_state = $id_shipped_order_state;
                    } else if ((int)$item->termout > $last_sync_ts) {
                        $id_order_state = $id_terminal_order_state;
                    }

                    if ($id_order_state > 0) {
                        $order = new Order((int)$item->reference);
                        if (Validate::isLoadedObject($order)) {
                            $order->setCurrentState($id_order_state);
                        }
                    }
                }
            }

            $this->module->updateConfig('last_ts', time());
        }
    }

    public function getSmartpostOrders()
    {
        $id_final_order_state = (int)$this->module->getConfig('shipped_state');
        $orders = array();

        if ($id_final_order_state == 0) {
            return false;
        }

        $smartpost_carriers = array(
            SmartpostLabel::SMARTPOST_MODULE_NAME,
            SmartpostLabel::SMARTCARRIER_MODULE_NAME,
            SmartpostLabel::FISMARTPOST_MODULE_NAME,
        );

        $query = new DbQuery();
        $query->select('o.`id_order`, oc.`id_order_carrier`');
        $query->from('orders', 'o');
        $query->innerJoin(
            'order_history',
            'oh',
            'oh.`id_order` = o.`id_order` AND oh.`id_order_state` != '.$id_final_order_state
        );
        $query->innerJoin('carrier', 'c', 'c.`id_carrier` = o.`id_carrier`');
        $query->innerJoin('order_carrier', 'oc', 'oc.`id_order` = o.`id_order`');
        $query->where(sprintf('c.`external_module_name` IN (\'%s\')', implode('\', \'', $smartpost_carriers)));
        $query->where('oc.`tracking_number` IS NOT NULL');
        $query->where('o.`valid` = 1');
        $query->groupBy('o.`id_order`');

        $result = Db::getInstance()->executeS($query);

        if (!empty($result)) {
            foreach ($result as $row) {
                $orders[(int)$row['id_order']] = (int)$row['id_order_carrier'];
            }
        }

        return $orders;
    }
}
