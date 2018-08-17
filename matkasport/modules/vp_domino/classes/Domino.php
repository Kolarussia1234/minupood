<?php

// ALTER TABLE `ps_product` ADD `id_product_domino` VARCHAR(255) NULL AFTER `id_product`;

require_once(dirname(__FILE__) . '/../../../config/config.inc.php');
require_once(dirname(__FILE__) . '/ProductHelper.php');
require_once(dirname(__FILE__) . '/Queue.php');

class VpDomino
{
    // Constants
    const VP_DOMINO_DEFAULT_LANG = 1;
    const VP_DOMINO_DEFAULT_SHOP = 1;
    const VP_DOMINO_TARGET_GROUP_FEATURE_ID = 19;
    const VP_DOMINO_TARGET_GROUP_FEATURE_NAME = 'Kellele';
    const VP_DOMINO_ACTIVITIES_GROUP_FEATURE_NAME = 'Tegevusalad';
    const VP_DOMINO_BOOM_ORDER_CAUSE_NR = 66;
    const VP_DOMINO_BOOM_STOCK_NO = 3;
    const VP_DOMINO_BOOM_TEST_CUSTOMER_CODE = 'WU00000001';
    const VP_DOMINO_PID = 'pid';

    // Payment accepted status id
    const VP_DOMINO_PAYMENT_ACCEPTED = 2;
    // Processing in progress status id
    const VP_DOMINO_PREPARATION = 3;
    // Error / Canceled status id
    const VP_DOMINO_CANCELED = 6;

    // Domino urls
    private $order_export_url = 'https://domino.matkasport.ee:8443/matkabuss/invoice/postInvoiceEnvelope';
    private $all_manufacturers_url = 'https://domino.matkasport.ee:8443/matkabuss/suppliers/getAllSuppliers';
    private $product_by_code_url = 'https://domino.matkasport.ee:8443/matkabuss/products/byProductCode?q=';
    private $domino_url = 'https://domino.matkasport.ee';

    // Variables
    private static $boom_instance = null;
    private static $id_root_category = 2;
    private static $output = false;
    private static $logs_enabled = false;
    private $test_mode = null;
    private $db = null;
    private $parcel_carriers = [
        'vp_omniva' => 'module',
        'vp_smartpost' => 'module',
    ];
    private $self_pickup_carrier = [
        'vp_selfpickup' => 'module',
    ];
    private $domino_carrier_map = [
        'vp_selfpickup' => 'EPOESTISE',
        'smartcarrier' => 'EPOEKULLER',
        'vp_omniva' => 'POST',
        'vp_smartpost' => 'POST',
    ];
    private $disabled_warehouses = [
        'Mobiilne' => 30,
    ];

    // Log folder & Fifo folder
    private static $log_files = null;
    private static $log_folder = _PS_MODULE_DIR_.'vp_domino/logs/';
    private $fifo_folder = _PS_MODULE_DIR_.'vp_domino/fifo/';

    /**
     * VpDomino constructor.
     * @param bool $output
     */
    public function __construct($type = 'bo', $pidFile = self::VP_DOMINO_PID, $output = false)
    {
        // Set class variables
        self::$output = (bool)$output;
        self::$logs_enabled = true;
        self::$log_files = array_flip([
            'manufacturer',
            'product',
            'quantity',
            'deleted_manufacturer',
            'category_status',
            'order',
        ]);

        $this->test_mode = !Configuration::get('VP_DOMINO_MODE');

        $this->db = Db::getInstance();

        if($type === 'cron') {
            $pidFile = _PS_MODULE_DIR_.'vp_domino/logs/'.$pidFile;
            file_put_contents($pidFile, posix_getpid());
        }
    }

    public static function isProcessRunning($pidFile = self::VP_DOMINO_PID) {
        $pidFile = _PS_MODULE_DIR_.'vp_domino/logs/'.$pidFile;

        if (!file_exists($pidFile) || !is_file($pidFile))
            return false;

        $pid = file_get_contents($pidFile);

        return posix_kill($pid, 0);
    }

    public static function shutDown($pidFile = self::VP_DOMINO_PID)
    {
        @unlink(_PS_MODULE_DIR_.'vp_domino/logs/'.$pidFile);
    }

    /**
     * @param null $url
     * @return array|bool
     */
    public function getData($type = null, $id = null)
    {
        if($type === null)
            return [];

        if($this->test_mode)
            return $this->getDataTest($type, $id);

        return $this->getDataLive($type, $id);
    }

    /**
     * @param $url
     * @return array
     */
    private function getDataLive($type, $id)
    {
        $url = null;

        switch ($type) {
            case 'manufacturer':
                $url = $this->all_manufacturers_url;
                break;
            case 'product':
                $url = $this->product_by_code_url.$id;
                break;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
        $output = curl_exec($ch);
        curl_close($ch);

        $data = (array)json_decode($output, true);

        return $data;
    }

    /**
     * @param $url
     * @return array
     */
    private function getDataTest($type, $id)
    {
        $filename = $this->fifo_folder.'test_data_'.$type.'.json';

        if (file_exists($filename)) {
            $results = json_decode(file_get_contents($filename), true);
            if($results !== null)
                foreach($results as $result)
                    if($id === key($result))
                        return ['Products' => [$result[$id]]];

        }

        $handle = @fopen($filename, 'r+');

        if ($handle === null || $handle === false) {
            $handle = fopen($filename, 'w+');
        }

        $domino_data = $this->getDataLive($type, $id);

        if(!isset($domino_data['Products']))
            return [];

        $product_data = [$id => $domino_data['Products'][0]];

        if ($handle) {
            fseek($handle, 0, SEEK_END);
            if (ftell($handle) > 0) {
                fseek($handle, -1, SEEK_END);
                fwrite($handle, ',', 1);
                fwrite($handle, self::utfJson($product_data) . ']');
            } else {
                fwrite($handle, self::utfJson([$product_data]));
            }
            fclose($handle);
        }

        return $domino_data;
    }

    /*
     *********************** Start order export functions
     */

    public function exportOrder($id_order, $orderState)
    {
        if($this->isOrderExported($id_order) || (int)$orderState->id !== self::VP_DOMINO_PAYMENT_ACCEPTED)
            return;

        $order = new Order($id_order);

        if(!$id_order || !Validate::isLoadedObject($order)) {
            VpDomino::addLogaddLog('order', 'Could not find order: '. $id_order);
            return;
        }

        $body = $this->createExportOrderBody($order);

        if(empty($body)) {
            //empty body means no data, do not send order and log this
            return;
        }

        $result = $this->sendOrder($id_order, $body);
        /*if(!$this->sendOrder($id_order, $body))
            $order->setCurrentState(self::VP_DOMINO_CANCELED);
        else
            $order->setCurrentState(self::VP_DOMINO_PREPARATION);*/
    }

    private function sendOrder($id_order, $body)
    {
        VpDomino::addLog('order', 'Starting to send order: '.$id_order);

        if($this->test_mode) {
            // Do not send order data if we are in test mode
            VpDomino::addLog('order', 'Test mode, order not sent: '.self::utfJson($body));
           return false;
        }

        $url = $this->order_export_url;
        $fields = self::utfJson($body);
        $ch = curl_init();

        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_POST, 1);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type:application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);

        curl_close($ch);

        $result_array = json_decode($result, true);

        if($result === null || !isset($result_array['header'], $result_array['header']['key'], $result_array['header']['key']['_invoiceno'])) {
            VpDomino::addLog('order', 'Order export failed. ' . $result);
            return false;
        }

        VpDomino::addLog('order', 'Order sent! ' . self::utfJson($result_array));
        $this->saveExportedOrder($id_order);
        return true;
    }

    private function createExportOrderBody(Order &$order)
    {
        $address = new Address($order->id_address_delivery);
        $customer = new Customer($order->id_customer);

        if(!Validate::isLoadedObject($address) || !Validate::isLoadedObject($address) || !Validate::isLoadedObject($customer)) {
            // one of the three are not objects therefore it's not right data.
            return [];
        }

        $paid_datetime = new DateTime();
        $paid_date = $paid_datetime->format('Y-m-d');

        $order_details = $order->getOrderDetailList();

        if(empty($order_details)) {
            //if order details are empty, we do not have products, what is this order i wonder
            VpDomino::addLog('order', 'Order does not have products: '.$order->id);
            return [];
        }

        $products = [];

        foreach($order_details as $order_detail) {
            $products[] = [
                'stockNo' => self::VP_DOMINO_BOOM_STOCK_NO,
                'artcode' => $order_detail['product_reference'],
                'volume' => $order_detail['product_quantity'],
                'amount' => Tools::ps_round($order_detail['total_price_tax_incl'], 2),
                'info' => ''
            ];
        }

        $carrier = new Carrier($order->id_carrier);

        //Carrier data to goods
        $carrier_artcode = ($carrier->external_module_name && isset($this->domino_carrier_map[$carrier->external_module_name]) ? $this->domino_carrier_map[$carrier->external_module_name] : '');

        $products[] = [
            'stockNo' => self::VP_DOMINO_BOOM_STOCK_NO,
            'artcode' => $carrier_artcode,
            'volume' => 1,
            'amount' => Tools::ps_round($order->total_shipping_tax_incl, 2),
            'info' => ''
        ];

        $info_txt = $this->getFormattedInfoTxt($address, $order, $carrier->external_module_name, ', ');
        $binfo = $this->getOrderMessages($order);

        $customer_code = ($this->test_mode ? self::VP_DOMINO_BOOM_TEST_CUSTOMER_CODE : $customer->customercode);
        $customer_name = ($this->test_mode ? 'VP TEST ' : '') . $address->firstname . ' '. $address->lastname;
        $customer_phone = $address->phone_mobile ? $address->phone_mobile : $address->phone;

        return [
            'header' =>
            [
                'invoice' => $order->reference,
                'stockNo' => self::VP_DOMINO_BOOM_STOCK_NO,
                'customerCode' => $customer_code,
                'invDate' => $paid_date,
                'info' => $info_txt,
                'bInfo' => $binfo,
                'bCustCode' => '',
                'name' => $customer_name,
                'phone' => $customer_phone,
                'bemail' => $customer->email,
                'address' => '',
                'address2' => '',
                'address3' => '',
                'refNum' => $order->reference,
            ],
            'goods' =>
                $products,
            'payment' =>
            [
                'paydate' => $paid_date,
                'paybill' => $order->reference,
                'amount' => Tools::ps_round($order->total_paid_tax_incl, 2),
                'causeNo' => self::VP_DOMINO_BOOM_ORDER_CAUSE_NR,
            ]
        ];
    }

    private function saveExportedOrder($id_order)
    {
        try {
            if($this->db->insert('vp_domino_order_export', ['id_order' => $id_order])) {
                VpDomino::addLog('order', 'Order saved to database (' . $id_order . ')');
            } else {
                VpDomino::addLog('order', 'Could not save order to database (' . $id_order . ')');
            }
        } catch (PrestaShopException $e) {
            VpDomino::addLog('order', 'Could not save order to database ('.$id_order.') - '.$e->getMessage());
        }
    }

    private function isOrderExported($id_order)
    {
        if(!$id_order)
            return false;

        try  {
            return (bool)$this->db->getValue('SELECT `id_order` FROM `'._DB_PREFIX_.'vp_domino_order_export` WHERE `id_order` = '.(int)$id_order);
        } catch (PrestaShopException $e) {
            VpDomino::addLog('order', 'Order export table error: '.$e->getMessage());
        }

        // if the table does not exist we output that order is exported so we don't try to export it.
        return true;

    }

    private function getFormattedInfoTxt(Address $address, Order $order, $carrier_name, $line_sep, $fields_style = [])
    {
        $text = '';
        // Formaadid 1. Pakiautomaat, 2. Tulen ise järgi, 3. Kuller
        if (isset($this->parcel_carriers[$carrier_name])) {
            $module = Module::getInstanceByName($carrier_name);
            $sql = '
                SELECT `id_'.$carrier_name.'`
                FROM `'._DB_PREFIX_.$carrier_name.'_order`
                WHERE `id_order` = '.$order->id.'
            ';

            $terminal_id = Db::getInstance()->getValue($sql);

            $terminal = $module->getTerminals([['id_'.$carrier_name, '=', $terminal_id]]);

            if($terminal && isset($terminal[0]))
                $terminal = $terminal[0];

            $text = $module->displayName . ' pakiautomaat '.$terminal['name'].'; Tellimus '.$order->id;

        } elseif (isset($this->self_pickup_carrier[$carrier_name])) {
            // @TODO
        } else {
            $module = Module::getInstanceByName($carrier_name);
            $sql = '
                SELECT `id_'.$carrier_name.'`
                FROM `'._DB_PREFIX_.$carrier_name.'_order`
                WHERE `id_order` = '.$order->id.'
            ';

            $terminal_id = Db::getInstance()->getValue($sql);

            $time = $module->getTerminals($terminal_id);

            $text = AddressFormat::generateAddress($address, ['avoid' => []], $line_sep, ' ', $fields_style);

            $text .= ' '.$time.'; Tellimus '.$order->reference;
        }

        $payments = $order->getOrderPaymentCollection();

        foreach ($payments as $payment) {
            /** @var OrderPayment $payment */
            $dt = new DateTime($payment->date_add);
            $text .= ', '.$dt->format('d.m.Y');
        }

        return $text;

    }

    public function getOrderMessages($order, $private = false, $string = true)
    {
        $sql = '
            SELECT `message`
            FROM `'._DB_PREFIX_.'message`
            WHERE `id_order` = '.(int)$order->id.'
            '.(!$private ? ' AND private = 0' : '').'
            ORDER BY `id_message`
        ';

        if($string)
            $messages = '';
        else
            $messages = [];
        $results = Db::getInstance()->executeS($sql);
        foreach($results as $key => $result) {
            if($string)
                $messages .= $result['message']. (isset($results[$key+1]) ?  ', ' : '');
            else
                $messages[] = $result['message'];
        }

        return $messages;
    }

    /*
     *********************** End order export functions
     */

    /*
     *********************** Start quantity functions
     */

    private function getBoomInstance()
    {
        if(!self::$boom_instance) {
            $db = new DbMySQLi('domino.matkasport.ee', 'root', 'FesAjCegEch2', 'buum');
            self::$boom_instance = $db;
        }

        return self::$boom_instance;
    }

    public function importQuantities()
    {
        $prestashop_refs = $this->getPrestashopProductReferences();

        $references = array_map('strval',array_keys($prestashop_refs));

        $db = $this->getBoomInstance();

        $sql = '
            SELECT i.ARTCODE, s.VOLUME, s.STOCKNO FROM STOCK s LEFT JOIN ITEM i on (i.ARTNO = s.ARTNO) WHERE s.STOCKNO NOT IN ('.implode(',',$this->disabled_warehouses).') AND i.ARTCODE IN ("'.implode('","',$references).'")
        ';

        try {
            $results = $db->executeS($sql);
        } catch (PrestaShopException $e) {
            echo $e->getMessage().'<br>';
            VpDomino::addLog('quantity', $e->getMessage());
            //return false;
        }

        // Product stock
        $products = [];
        foreach($results as $result) {
            if(!isset($products[$result['ARTCODE']]))
                $products[$result['ARTCODE']] = 0;

            $products[$result['ARTCODE']] += $result['VOLUME'];
        }

        $data = [];

        foreach($products as $ref => $qty) {
            if(!isset($prestashop_refs[$ref])) {
                continue;
            }

            $product = $prestashop_refs[$ref];
            unset($prestashop_refs[$ref]);

            $data[] = [
                'id_product' => $product['id_product'],
                'id_product_attribute' => $product['id_product_attribute'],
                'quantity' => $qty,
                'id_shop' => 1,
                'id_shop_group' => 0,
            ];
        }

        // 0 quantity products
        foreach($prestashop_refs as $product) {
            $data[] = [
                'id_product' => $product['id_product'],
                'id_product_attribute' => $product['id_product_attribute'],
                'quantity' => 0,
                'id_shop' => 1,
                'id_shop_group' => 0,
            ];
        }

        Db::getInstance()->execute('
          CREATE TEMPORARY TABLE `'._DB_PREFIX_.'boom_quantity` (
              id_product INT UNSIGNED NOT NULL DEFAULT 0, 
              id_product_attribute INT UNSIGNED NOT NULL DEFAULT 0,
              quantity INT UNSIGNED NOT NULL DEFAULT 0,
              id_shop INT UNSIGNED NOT NULL DEFAULT 1,
              id_shop_group INT UNSIGNED NOT NULL DEFAULT 0
          ) ENGINE=MEMORY', false);

        Db::getInstance()->insert('boom_quantity', $data, false, false);

        Db::getInstance()->execute('
            UPDATE ps_stock_available sa JOIN ps_boom_quantity bq
            ON (sa.id_product = bq.id_product AND sa.id_product_attribute = bq.id_product_attribute AND sa.id_shop = bq.id_shop AND sa.id_shop_group = bq.id_shop_group)
            SET sa.quantity = bq.quantity
        ');

        Db::getInstance()->execute('DROP TEMPORARY TABLE `'._DB_PREFIX_.'boom_quantity`', false);

    }

    public function importQuantitiesBuumStocks()
    {
        $prestashop_refs = $this->getPrestashopProductReferences();
        $references = array_map('strval',array_keys($prestashop_refs));

        $db = $this->getBoomInstance();

        $sql = '
            SELECT i.ARTCODE, s.VOLUME, s.STOCKNO FROM STOCK s LEFT JOIN ITEM i on (i.ARTNO = s.ARTNO) WHERE s.STOCKNO NOT IN ('.implode(',',$this->disabled_warehouses).') AND s.VOLUME > 0.00
        ';

        try {
            $results = $db->executeS($sql);
        } catch (PrestaShopException $e) {
            echo $e->getMessage().'<br>';
            VpDomino::addLog('quantity', $e->getMessage());
            return false;
        }

        // Product stock
        $data = [];
        foreach($results as $result) {
            if(!isset($prestashop_refs[$result['ARTCODE']]) || (float)$result['VOLUME'] == 0.00) {
                continue;
            }

            $product = $prestashop_refs[$result['ARTCODE']];

            $data[] = [
                'id_product' => $product['id_product'],
                'id_product_attribute' => $product['id_product_attribute'],
                'product_reference' => $result['ARTCODE'],
                'shop_number' => $result['STOCKNO'],
                'quantity' => $result['VOLUME'],
            ];
        }

        Db::getInstance()->execute('TRUNCATE '._DB_PREFIX_.'vp_buumstocks');
        Db::getInstance()->insert('vp_buumstocks', $data, false, false);
    }

    private function getPrestashopProductReferences()
    {
        $sql = '
            SELECT id_product, reference FROM ps_product WHERE cache_default_attribute = 0;
        ';

        $results = $this->db->executeS($sql);

        $products = [];
        foreach($results as $result)
            $products[$this->trimProductReference($result['reference'])] = [
                'id_product' => $result['id_product'],
                'id_product_attribute' => 0,
            ];

        $sql = '
            SELECT id_product, id_product_attribute, reference FROM ps_product_attribute;
        ';

        $results = $this->db->executeS($sql);

        foreach($results as $result)
            $products[$this->trimProductReference($result['reference'])] = [
                'id_product' => $result['id_product'],
                'id_product_attribute' => $result['id_product_attribute'],
            ];

        return $products;
    }

    private function trimProductReference($ref)
    {
        if($str = substr($ref, -1) === "%")
            return substr($ref, 0, -1);

        return $ref;
    }

    /*
     *********************** End quantity functions
     */

    /*
     *********************** Start manufacturer functions
     */

    /**
     * @return array
     */
    private function getAllDominoManufacturers()
    {
        $data = $this->getData('manufacturer');

        if(isset($data['Suppliers']))
            return (array)$data['Suppliers'];

        return [];
    }

    /**
     * @return array
     */
    public function getAllPrestashopManufacturers()
    {
        $sql = '
            SELECT `id_manufacturer`, `name`
            FROM `'._DB_PREFIX_.'manufacturer`
        ';

        $results = Db::getInstance()->executeS($sql);

        if(!is_array($results))
            return [];

        $manufacturers = [];

        foreach($results as $result)
            $manufacturers[$result['name']] = $result['id_manufacturer'];

        return $manufacturers;
    }

    /**
     * @return array
     */
    public function getAllEmptyPrestashopManufacturers()
    {
        $sql = '
            SELECT m.`id_manufacturer`, m.`name`
            FROM '._DB_PREFIX_.'manufacturer m
            WHERE NOT EXISTS 
                (
                    SELECT COUNT(p.id_manufacturer)
                    FROM '._DB_PREFIX_.'product p
                    WHERE p.id_manufacturer = m.id_manufacturer
                    GROUP BY p.id_manufacturer
                )
        ';

        $results = Db::getInstance()->executeS($sql);

        if(!is_array($results))
            return [];

        $manufacturers = [];

        foreach($results as $result) {
            $manufacturers[$result['id_manufacturer']] = $result['name'];
        }

        return $manufacturers;
    }

    /**
     * @param bool $output
     */
    public function deleteEmptyManufacturers($output = false)
    {
        $manufacturers = $this->getAllEmptyPrestashopManufacturers();

        if(!$manufacturers)
            return;

        // Get all ids in a string
        $sql_ids = implode(',', array_flip($manufacturers));

        // Class, lang, shop tables
        try {
            Db::getInstance()->delete('manufacturer_shop', 'id_manufacturer IN (' . $sql_ids . ')');
            Db::getInstance()->delete('manufacturer_lang', 'id_manufacturer IN (' . $sql_ids . ')');
            Db::getInstance()->delete('manufacturer', 'id_manufacturer IN (' . $sql_ids . ')');
            VpDomino::addLog('deleted_manufacturer', 'Deleted manufacturers with ids: '.$sql_ids);
        } catch (PrestaShopException $e) {
            VpDomino::addLog('deleted_manufacturer', 'Could not delete manufacturers');
        }
    }

    public function importManufacturers($output = false)
    {
        $domino_datas = $this->getAllDominoManufacturers();
        $prestashop_datas = $this->getAllPrestashopManufacturers();

        foreach($domino_datas as $domino_data) {
            // Do we have existing manufacturer?
            if(isset($prestashop_datas[$domino_data['SupplierName']]))
                continue;

            if($this->createManufacturer($domino_data))
                VpDomino::addLog('manufacturer', 'Added new manufacturer: '.$domino_data['SupplierName']);
            else
                VpDomino::addLog('manufacturer', 'Could not add new manufacturer: '.$domino_data['SupplierName']);
        }

        VpDomino::addLog('manufacturer', 'Finished manufacturer import.');
    }

    public function createManufacturer($data)
    {
        // Add new manufacturer
        $manufacturer = new Manufacturer();
        $manufacturer->name = $data['SupplierName'];
        $manufacturer->short_description = $data['WWW'];
        $manufacturer->active = 1;

        try {
            $manufacturer->add();
        } catch (PrestaShopException $e) {
            VpDomino::addLog('manufacturer', 'Error: '.$e->getMessage());
            return 0;
        }

        return (int)$manufacturer->id > 0 ? $manufacturer->id : 0;
    }

    /*
     *********************** End manufacturer functions
     */

    /*
     *********************** Start product functions
     */
    public function importProducts()
    {
        $filename = $this->fifo_folder.'products_data.fifo';

        $queue = new VpQueue($filename);

        $nbr_items = $queue->count();

        if($nbr_items === 0)
            die();

        for($i = 0; $i < $nbr_items; $i++) {
            $domino_id_product = $queue->readLine();

            VpDomino::addLog('product', 'Start to import: ' . $domino_id_product);

            $id_product = $this->getExistingProductIdByDominoId($domino_id_product);

            $domino_data = $this->getData('product', $domino_id_product);

            //@TODO Disable product
            if (!isset($domino_data['Products'])) {

                if($id_product) {
                    $product = new Product($id_product);
                    $product->setFieldsToUpdate(['active']);
                    $product->active = 0;
                    $product->update();

                    VpDomino::addLog('product', 'Disabled product: '.$id_product);
                }

                $queue->deleteline($domino_id_product);
                VpDomino::addLog('product', 'No product data: '.$domino_id_product);
                continue;
            }

            if ($this->addProduct($domino_data['Products'][0], $id_product)) {
                VpDomino::addLog('product', 'Imported: '. $id_product . ', ' . $domino_id_product);
            } else {
                VpDomino::addLog('product', 'Failed to import: '. $id_product . ', ' . $domino_id_product);
            }

            $queue->deleteline($domino_id_product);
        }

        VpDomino::addLog('product', 'Finished import');

        die();
    }

    public function writeDominoProductId($products)
    {
        if(!isset($products['Products']))
            die(self::utfJson('EMPTY'));

        $product_domino_ids = array_values(array_map('current',$products['Products']));

        $filename = $this->fifo_folder.'products_data.fifo';

        $queue = new VpQueue($filename);

        foreach($product_domino_ids as $id)
            $queue->writeLine($id);

        die(self::utfJson('OK'));
    }

    public function addProduct($product, $id_product)
    {
        $product = $this->getSimpleProductData($product);

        // Manufacturer data manipulation, use existing or create a new
        $manufacturers = $this->getAllPrestashopManufacturers(false, false);

        $id_manufacturer = isset($manufacturers[$product['SupplierName']]) ? $manufacturers[$product['SupplierName']] : $this->createManufacturer(['SupplierName' => $product['SupplierName'], 'WWW' => '']);

        if(!$id_manufacturer)
            return false;

        // Category data manipulation, use existing or create new
        $categories = explode(';', $product['ProductSubClass']);

        foreach($categories as &$category) {
            $category = explode('/', $category);
        }

        unset($category);

        $id_categories = null;

        if(!$id_categories = $this->getCategoryIdByName($categories))
            return false;


        $productObj = new Product($id_product);
        $productObj->id_product_domino = $product['ProductID'];
        $productObj->name[self::VP_DOMINO_DEFAULT_LANG] = $product['SupplierName'] . ' ' .$product['ProductName'];
        $productObj->link_rewrite[self::VP_DOMINO_DEFAULT_LANG] = Tools::link_rewrite($product['ProductName']);
	    $productObj->reference = $product['ProductCode'];
        $productObj->description[self::VP_DOMINO_DEFAULT_LANG] = $this->addLinksToDescription($product['Body'], $product['Links']);;
        $productObj->description_short[self::VP_DOMINO_DEFAULT_LANG] = $product['ProductDescription'];
        $productObj->id_manufacturer = $id_manufacturer;
        $productObj->weight = $product['ProductDefaultWeight'];
        $productObj->meta_keywords[self::VP_DOMINO_DEFAULT_LANG] = $product['DocSearchKeywords'];
        $productObj->meta_description[self::VP_DOMINO_DEFAULT_LANG] = $product['DocSearchDescription'];

        $now = new DateTime();

        if((int)$product['newhomepage'] === 1) {
            $productObj->date_add = $now->format('Y-m-d H:i:s');
        } else {
            $nbr_new_days = Configuration::get('PS_NB_DAYS_NEW_PRODUCT');
            $nbr_new_days_domino = $product['newproductdays'];

            $now->modify('-' . $nbr_new_days . ' day');
            $now->modify('+' . $nbr_new_days_domino . ' day');
            $productObj->date_add = $now->format('Y-m-d');
        }

        if(!isset($id_categories[0], $id_categories[1])) {
            // if We do not have a parent or child, we disable product
            VpDomino::addLog('product', 'Missing categories: ('.$product['ProductID'].')'. var_dump($categories));
            $productObj->active = 0;
        } else {
            // Set first child category as default category
            $productObj->id_category_default = $id_categories[1];
        }

        try {
            $result = $productObj->save();
        } catch (PrestaShopException $e) {
            VpDomino::addLog('product', 'Error saving product: '.$product['ProductCode'].' '.$e->getMessage());
            return false;
        }

        if(!$result)
            return false;

        $data = [
            'combinations' => $product['Models'],
            'pictures' => $product['Pictures'],
            'features' => $product['ProductProperties'],
            'accessories' => $product['Relatives'],
            'attachments' => $product['Files'],
            'discountdata' => ['discountdate' => $product['discountdate'], 'discounthomepage' => $product['discounthomepage']],
            'targetgroup' => $product['TargetGroup'],
            'activities' => $product['Activities'],
        ];

        if((int)$product['isrecommended'] === 1)
            $data['recommended'] = $product['recommendedSubClasses'];

        if(!$result = $this->saveProductInformations($productObj, $data)) {
            $productObj->setFieldsToUpdate(['active']);
            $productObj->active = 0;
            $productObj->save();
            return false;
        }

        try {
            $productObj->deleteCategories(true);
            $result = $productObj->addToCategories($id_categories);
        } catch (PrestaShopException $e) {
            VpDomino::addLog('product', 'Can not add product categories: ('.implode(', ', $id_categories).') '.$e->getMessage());
        }

        if($result) {
            $productObj->setFieldsToUpdate(['active']);
            $productObj->active = 1;
            $productObj->save();
        }

        return $result;
    }

    /**
     * @param Product $product
     * @param $data
     * @return bool
     */
    private function saveProductInformations(Product $product, $data)
    {
        $result = $this->saveProductCombinations($data['combinations'], $product, $data['discountdata']);
        // Split images and videos
        $visual = $this->splitProductVisuals($data['pictures']);

        $result &= $this->saveProductImages($visual['images'], $product);
        $result &= $this->saveProductVideos($visual['videos'], $product);
        $result &= $this->saveProductFeatures($data['features'], $product);
        $result &= $this->saveProductActivities($data['activities'], $product);
        $result &= $this->saveProductTargetGroupFeature($data['targetgroup'], $product);
        $result &= $this->saveProductAccessories($data['accessories'], $product);
        $result &= $this->saveProductAttachments($data['attachments'], $product);

        if(isset($data['recommended']))
            $result &= $this->saveProductRecommendations($data['recommended'], $product);

        return $result;
    }

    private function saveProductActivities($datas, $product)
    {
        if(!is_string($datas))
            return true;

        $datas = explode(';', $datas);

        foreach($datas as $data) {
            $id_feature = Feature::addFeatureImport(self::VP_DOMINO_ACTIVITIES_GROUP_FEATURE_NAME);

            $id_feature_value = FeatureValue::addFeatureValueImport($id_feature, $data, null, self::VP_DOMINO_DEFAULT_LANG);

            if(!Product::addFeatureProductImport($product->id, $id_feature, $id_feature_value))
                return false;
        }

        return true;
    }

    private function saveProductRecommendations($data, $product)
    {

        if(empty($data))
            return true;

        $categories = explode(';', $data);

        foreach($categories as &$category) {
            $category = explode('/', $category);
        }

        $categories = $this->getCategoryIdByName($categories);

        $subcategories = [];

        $n = 1;

        do {

            $subcategories[] = $categories[$n];
            $n = $n+2;

        } while (isset($categories[$n]));

        $subcategories = array_unique($subcategories);

        foreach($subcategories as $subcategory)
            Db::getInstance()->insert('vp_recommended',
                ['id_product' => $product->id, 'id_category' => $subcategory],
                false, false, Db::INSERT_IGNORE);

        return true;
    }

    private function saveProductTargetGroupFeature($datas, $product)
    {
        if(!is_string($datas))
            return true;

        $datas = explode(';', $datas);

        foreach($datas as $data) {
            $id_feature = Feature::addFeatureImport(self::VP_DOMINO_TARGET_GROUP_FEATURE_NAME);

            $id_feature_value = FeatureValue::addFeatureValueImport($id_feature, $data, null, self::VP_DOMINO_DEFAULT_LANG);

            if(!Product::addFeatureProductImport($product->id, $id_feature, $id_feature_value))
                return false;
        }

        return true;
    }

    private function saveProductVideos($datas, $product)
    {
        if(empty($datas))
            return true;

        $videos = [];

        // Empty previous videos
        Db::getInstance()->delete('iqit_productvideo', 'id_product = '.$product->id);

        foreach($datas as $data) {
            $videos[] = [
                'p' => strtolower($data['VideoSource']),
                'id' => $data['VideoID'],
            ];
        }

        // Add videos to product
        try {
            Db::getInstance()->insert('iqit_productvideo', [
                'id_product' => $product->id,
                'content' => self::utfJson($videos),
            ]);
        } catch (PrestaShopDatabaseException $e) {
            VpDomino::addLog('product', 'Could not add product videos'. $product->id . ' - '. $e->getMessage());
        }

        return true;
    }

    private function splitProductVisuals($datas)
    {
        $return = [
            'videos' => [],
            'images' => [],
        ];

        foreach($datas as $data) {
            if($data['VideoID'])
                $return['videos'][] = $data;
            else
                $return['images'][] = $data;
        }

        return $return;
    }

    public function addLinksToDescription($desc, $links)
    {
        if(!$links)
            return $desc;

        $html = '';

        foreach($links as $link) {
            $html .= '
            <p class="prod_link"><a href="'.$link['URL'].'" target="_blank">'.$link['Name'].'</a></p>
        ';
        }

        return $desc.$html;
    }

    public function saveProductAttachments($datas, $product)
    {
        if(empty($datas))
            return true;

        $files = $this->getAttachments(self::VP_DOMINO_DEFAULT_LANG);

        $file_names = [];

        foreach($files as $file) {
            $name = md5($file['file_name'].$file['mime'].$file['file_size']);
            $file_names[$name] = $file['id_attachment'];
        }

        $attachments = [];

        foreach($datas as $data) {
            $file = file_get_contents($this->domino_url.$data['URL']);

            $mime_type = null;

            $pattern = "/^content-type\s*:\s*(.*)$/i";

            $match = [];

            $header = preg_grep($pattern, $http_response_header);

            $header = array_values($header);

            if (preg_match($pattern, array_shift($header), $match) !== false) {
                $mime_type = $match[1];
            }

            if($mime_type === null)
                continue;

            if (!empty($file)) {
                $fileName = sha1(microtime());

                file_put_contents(_PS_DOWNLOAD_DIR_.$fileName, $file);

                $file_size = filesize(_PS_DOWNLOAD_DIR_.$fileName);
                $md5 = md5($data['Name'].$mime_type.$file_size);

                if(isset($file_names[$md5])) {
                    $attachments[] = $file_names[$md5];
                    unlink(_PS_DOWNLOAD_DIR_.$fileName);
                    continue;
                }

                $attachment = new Attachment();

                $attachment->name[self::VP_DOMINO_DEFAULT_LANG] = $data['Description'];
                $attachment->description[self::VP_DOMINO_DEFAULT_LANG] = $data['Description'];

                $attachment->file = $fileName;
                $attachment->mime = $mime_type;
                $attachment->file_name = $data['Name'];

                try {
                    $res = $attachment->add();
                } catch (PrestaShopException $e) {
                    VpDomino::addLog('product', 'Could not add attachment'. $e->getMessage());
                }

                if(!$res) {
                    VpDomino::addLog('product', 'Attachment not saved'. $data['Description']);
                   continue;
                }

                $attachments[] = $attachment->id;
            }
        }

        if(!empty($attachments)) {
            if(!Attachment::attachToProduct($product->id, $attachments))
                return false;
        }

        return true;
    }

    private function getAttachments($idLang)
    {
        return Db::getInstance()->executeS('
			SELECT *
			FROM '._DB_PREFIX_.'attachment a
			LEFT JOIN '._DB_PREFIX_.'attachment_lang al
				ON (a.id_attachment = al.id_attachment AND al.id_lang = '.(int) $idLang.')
			'
        );
    }

    public function saveProductFeatures($datas, $product)
    {
        foreach($datas as $data) {
            if(empty($data['PropertyName']) || empty($data['PropertyValue']))
                continue;

            if(!Validate::isGenericName($data['PropertyValue']))
                continue;

            $id_feature = Feature::addFeatureImport($data['PropertyName']);
            $id_feature_value = FeatureValue::addFeatureValueImport($id_feature, $data['PropertyValue'], null, self::VP_DOMINO_DEFAULT_LANG);

            if(!Product::addFeatureProductImport($product->id, $id_feature, $id_feature_value))
                return false;
        }

        return true;
    }

    /**
     * @param $category_names
     * @return array
     */
    public function getCategoryIdByName($category_names)
    {
        if(!is_array($category_names))
            $category_names = [$category_names];

        $id_categories = [];

        foreach($category_names as $category_name) {
            // We expect there to be 2 names, parent and child
            if(!is_array($category_name) || count($category_name) !== 2)
                continue;

            list($parent_name, $child_name) = $category_name;

            $sql = '
                SELECT c.`id_category`
                FROM `'._DB_PREFIX_.'category` c
                LEFT JOIN `'._DB_PREFIX_.'category_lang` cl
                    ON (c.`id_category` = cl.`id_category` AND cl.`id_lang` = '.self::VP_DOMINO_DEFAULT_LANG.')
                WHERE cl.`name` = "'.pSQL($parent_name).'"
            ';

            $id_parent = (int)Db::getInstance()->getValue($sql);

            if(!$id_parent) {
                // create new categories
                $category = new Category();
                $category->name[self::VP_DOMINO_DEFAULT_LANG] = $parent_name;
                $category->id_parent = self::$id_root_category;
                $category->link_rewrite[self::VP_DOMINO_DEFAULT_LANG] = Tools::link_rewrite($parent_name);

                try {
                    $category->save();
                } catch (PrestaShopException $e) {
                    VpDomino::addLog('product',  'Category error: '.$category->name[self::VP_DOMINO_DEFAULT_LANG].' - '.$e->getMessage());
                }

                if((int)$category->id === 0)
                    return [];

                $id_parent = (int)$category->id;
            }

            $sql = '
                SELECT c.`id_category`
                FROM `'._DB_PREFIX_.'category` c
                LEFT JOIN `'._DB_PREFIX_.'category_lang` cl
                    ON (c.`id_category` = cl.`id_category` AND cl.`id_lang` = '.self::VP_DOMINO_DEFAULT_LANG.')
                WHERE cl.`name` = "'.pSQL($child_name).'" AND c.`id_parent` = '.$id_parent.'
            ';

            $id_child = (int)Db::getInstance()->getValue($sql);

            if(!$id_child) {
                // create child category and return values
                $category = new Category();
                $category->name[self::VP_DOMINO_DEFAULT_LANG] = $child_name;
                $category->id_parent = $id_parent;
                $category->link_rewrite[self::VP_DOMINO_DEFAULT_LANG] = Tools::link_rewrite($child_name);

                try {
                    $category->save();
                } catch (PrestaShopException $e) {
                    VpDomino::addLog('product',  'Category error: '.$category->name[self::VP_DOMINO_DEFAULT_LANG].' - '.$e->getMessage());
                }

                if((int)$category->id === 0)
                    return [];

                $id_child = (int)$category->id;

            }

            array_push($id_categories, $id_parent, $id_child);
        }

        return $id_categories;
    }

    public function saveProductAccessories($datas, Product $product)
    {
        if(empty($datas))
            return true;

        $products = ProductHelper::getProductIdByReference($datas);

        if(!$products)
            return true;

        $ids = [];

        foreach($datas as $data) {
            if(isset($products[$data]))
                $ids[] = $products[$data];
        }

        try {
            $product->deleteAccessories();
            $product->changeAccessories($ids);
        } catch (PrestaShopException $e) {
            VpDomino::addLog('product', 'Can not add product accessories: '. $e->getMessage());
        }

        return true;

    }

    public function saveProductCombinations($datas, Product $product, $discountdata)
    {
        $result = true;
        $product_combinations = 0;

        $combinations = [];
        $default_combination = 0;

        foreach($datas as $data) {
            $properties = $data['ModelProperties'];
            $articles = $data['Articles'];

            $attributes = [];

            foreach($properties as $property) {
                if(empty($property['PropertyValue']))
                    continue;

                $id_attribute_group = $this->getAttributeGroupIdByName($property['PropertyName']);
                $id_attribute = $this->getAttributeIdByName($property['PropertyValue'], $id_attribute_group);

                if(!$id_attribute) {
                    VpDomino::addLog('product', 'No id attribute');
                    return false;
                }

                $attributes[$property['PropertyName']] = $id_attribute;
            }

            // attribute group Size
            $id_attribute_group_size = $this->getAttributeGroupIdByName('Suurus');

            // attribute group Color for filter
            $id_attribute_group_color = $this->getAttributeGroupIdByName('Värv filtreerimiseks');


            if(!$id_attribute_group_size || !$id_attribute_group_color)
                return false;

            foreach($articles as $article) {
                $id_combination = (int)Combination::getIdByReference($product->id, $article['ArticleCode']);

                $article_attributes = [];

                if(!empty($article['ArticleSize'])) {
                    $attribute = $this->getAttributeIdByName($article['ArticleSize'], $id_attribute_group_size);

                    if(!$attribute) {
                        VpDomino::addLog('product', 'No attribute article size'. $article['ArticleSize']);
                        return false;
                    }

                    $article_attributes[] = $attribute;
                    if(isset($attributes['Suurus']))
                        unset($attributes['Suurus']);

                }

                if(!empty($article['ArticleColor'])) {
                    $attribute = $this->getAttributeIdByName($article['ArticleColor'], $id_attribute_group_color);

                    if(!$attribute) {
                        VpDomino::addLog('product', 'No attribute article color'. $article['ArticleColor']);
                        return false;
                    }

                    $article_attributes[] = $attribute;
                }

                $article_attributes = array_merge($article_attributes, $attributes);

                if(empty($article_attributes)) {
                    VpDomino::addLog('product', 'No attributes '. $article['ArticleCode']);
                    continue;
                }

                $combination = new Combination($id_combination);

                $combination->id_product = $product->id;
                $combination->reference = $article['ArticleCode'];
                $combination->price = Tools::ps_round($article['UnitPrice'], 2) - Tools::ps_round(($article['UnitPrice'] * 0.166667), 2);

                try {
                    $result &= $combination->save();
                } catch (PrestaShopException $e) {
                    VpDomino::addLog('product', 'Could not save combination: '.$article['ArticleCode'].' - '.$e->getMessage());
                }

                if(!$result) {
                    VpDomino::addLog('product', 'Could not save combination.' . $article['ArticleCode']);
                    return false;
                }

                try {
                    $result &= $combination->setAttributes($article_attributes);
                } catch (PrestaShopException $e) {
                    VpDomino::addLog('product', 'Could not save combination attributes: '.$article['ArticleCode'].' - '.$e->getMessage());
                }

                if(!$result) {
                    VpDomino::addLog('product', 'Could not save combination attributes.' . $combination->id);
                    return false;
                }


                if(!$this->addCombinationSpecificPrice($combination, $article, $discountdata)) {
                    return false;
                }

                $this->saveCombinationStocks($combination, $article['Stocks']);

                if((float)$article['SpecPrice'] > 0.00) {
                    $default_combination = $combination->id;
                }

                $combinations[] = $combination->id;
                $product_combinations++;
            }
        }

        if($product_combinations === 0) {
            // No attributes = Tavatoode, hind = kombinatsiooni hind
            $product->deleteProductAttributes();
            $product->price = Tools::ps_round($article['UnitPrice'], 2) - Tools::ps_round(($article['UnitPrice'] * 0.166667), 2);
            $product->setFieldsToUpdate(['price']);
            try {
                if(!$product->update()) {
                    VpDomino::addLog('product', 'Could not update product'.$product->id);
                    return false;
                }

            } catch (PrestaShopException $e) {
                VpDomino::addLog('product', 'Saved combination price as product price: '. $product->price .'('. $product->id.')'. $e->getMessage());
            }

            return true;
        }

        if(!$default_combination) {
              $default_combination = $combinations[0];
        }

        return $product->deleteDefaultAttributes() && $product->setDefaultAttribute($default_combination);
    }

    private function addCombinationSpecificPrice(Combination &$combination, $article, $discountdata)
    {
        $specificprices = SpecificPrice::getByProductId($combination->id_product, $combination->id);

        foreach($specificprices as $specificprice) {
            $sp = new SpecificPrice($specificprice['id_specific_price']);
            $sp->delete();
            // delete previous
        }

        if((float)$article['SpecPrice'] == 0.00) {
           return true;
        }

        $discountdate_dt = new DateTime($discountdata['discountdate']);
        $discountdate = $discountdate_dt->format('Y-m-d H:i:s');

        if((int)$discountdata['discounthomepage'] === 1) {
            $dt = new DateTime();
            $discount_from = $dt->format('Y-m-d H:i:s');
        } else {
            $discount_from = $discountdate;
        }

        $specificPrice = new SpecificPrice();
        $specificPrice->id_product = $combination->id_product;
        $specificPrice->id_product_attribute = $combination->id;
        $specificPrice->id_shop = 1;
        $specificPrice->id_shop_group = 0;
        $specificPrice->id_currency = 0;
        $specificPrice->id_country = 0;
        $specificPrice->id_group = 0;
        $specificPrice->id_customer = 0;
        $specificPrice->price = -1;
        $specificPrice->from_quantity = 1;
        $specificPrice->reduction = $article['UnitPrice'] - (float)$article['SpecPrice'];
        $specificPrice->reduction_tax = 1;
        $specificPrice->reduction_type = 'amount';
        $specificPrice->from = $discount_from;
        $specificPrice->to = '0000-00-00 00:00:00';

        try {
            if(!$specificPrice->save())
                return false;
        } catch (PrestaShopException $e) {
            VpDomino::addLog('product', 'Could not save specific price.'. $e->getMessage());
            return false;
        }

        return true;
    }

    private function saveCombinationStocks(Combination $combination, $stocks)
    {
        if(!is_array($stocks) || empty($stocks))
            return true;

        $qty = 0;

        foreach($stocks as $stock) {

            if((int)$stock['Size'] === 0)
                continue;

            $data = [
                'id_product_attribute' => $combination->id,
                'product_reference' => $combination->reference,
                'warehouse' => $stock['Shop']['ShopName'],
                'shop_number' => $stock['Shop']['ShopNumber'],
                'quantity' => $stock['Size'],
                'imported' => 1,
            ];

            Db::getInstance()->insert('vp_buumstocks', $data, false, false, Db::ON_DUPLICATE_KEY);

            $qty += $stock['Size'];
        }

        StockAvailable::setQuantity($combination->id_product, $combination->id, $qty, self::VP_DOMINO_DEFAULT_SHOP);
    }

    public function saveProductImages(&$datas, $product)
    {
        $specific_images = [];

        $all_images = [];

        $sorted = [];

        $comb_images = [];

        foreach($datas as $id => $datum) {
            if($datum['Target'] === 'toode') {
                $sorted[] = $datum;
                unset($datas[$id]);
                continue;
            }

            if((int)$datum['IsMain'] === 1)
                array_unshift($comb_images, $datum);
            else
                array_push($comb_images, $datum);
        }

        $data = array_merge($comb_images, $sorted);

        foreach($data as $datum) {

            $url = $this->domino_url . $datum['URL'];

            $url = str_replace(' ', '%20', $url);

            $ref = ProductHelper::getModelReference($datum['Target']);

            $id_combinations = ProductHelper::getCombinationIdByReference($product->id, $ref);

            $id_image = $this->getImageIdByModelAndUrl($datum['Target'], $url, $product->id);

            if($datum['Target'] === 'toode') {
                $all_images[] = $id_image;
                continue;
            }

            if(!empty($id_combinations)) {
                foreach($id_combinations as $id_combination) {
                    $specific_images[$id_combination][] = $id_image;
                }
            }
        }

        $combinations = $product->getAttributeCombinations(self::VP_DOMINO_DEFAULT_LANG, false);

        foreach($combinations as $combination) {

            $images = $all_images;

            if(isset($specific_images[$combination['id_product_attribute']])) {
                $images = array_merge($images, $specific_images[$combination['id_product_attribute']]);
            }

            $images = array_unique($images);

            $combination = new Combination($combination['id_product_attribute']);
            if (Validate::isLoadedObject($combination)) {
                try {
                    if (!$combination->setImages($images)) {
                        VpDomino::addLog('product', 'Could not add image to combination: (' . $combination['id_product_attribute'] . ')');
                        return false;
                    }
                } catch (PrestaShopException $e) {
                    VpDomino::addLog('product', 'Could not add image to combination: (' . $combination['id_product_attribute'] . ') '. $e->getMessage());
                    return false;
                }
            }
        }

        return true;

    }

    private function getImageIdByModelAndUrl($model, $url, $id_product)
    {
        // file_exists doesn't work with HTTP protocol
        if (@fopen($url, 'r') == false) {
            VpDomino::addLog('product', 'Could not open url '.$url);
            return 0;
        }

        $sql = '
            SELECT id_image
            FROM '._DB_PREFIX_.'image
            WHERE `url` = "'.pSQL($url).'" AND `model` = "'.pSQL($model).'"
        ';

        $id_image = (int)Db::getInstance()->getValue($sql);
        $image = new Image($id_image);

        if(Validate::isLoadedObject($image) && !file_exists(_PS_PROD_IMG_DIR_.$image->getImgPath().'.jpg')) {
            $id_image = null;
            $image->delete();
        }

        if($id_image > 0)
            return $id_image;

        $image = new Image();
        $image->id_product = (int)$id_product;
        $image->position = Image::getHighestPosition($id_product) + 1;
        $image->cover = false;
        $image->url = $url;
        $image->model = $model;
        $image->cover = (bool)!Image::getGlobalCover($id_product);

        try {
            if(!$image->add()) {
                VpDomino::addLog('product', 'Could not save image '.$url);
                return 0;
            }
        } catch (PrestaShopException $e) {
            VpDomino::addLog('product', 'Could not add image'. $e->getMessage());
            return 0;
        }

        try{
            if (!$this->copyImage($id_product, $image->id, $url))
            {
                $image->delete();
                VpDomino::addLog('product', sprintf('Error copying image: %s', $url));
                return 0;
            }
        } catch (PrestaShopException $e) {
            VpDomino::addLog('product', 'Could not copy image'. $e->getMessage());
            return 0;
        }

        return (int)$image->id;
    }

    protected function copyImage($id_entity, $id_image = null, $url, $entity = 'products')
    {
        $tmpfile = tempnam(_PS_TMP_IMG_DIR_, 'vp_domino');
        $watermark_types = explode(',', Configuration::get('WATERMARK_TYPES'));

        switch ($entity)
        {
            default:
            case 'products':
                $image_obj = new Image($id_image);
                $path = $image_obj->getPathForCreation();
                break;
            case 'categories':
                $path = _PS_CAT_IMG_DIR_.(int)$id_entity;
                break;
        }

        $url = str_replace(' ', '%20', trim($url));

        // Evaluate the memory required to resize the image: if it's too much, you can't resize it.
        if (!ImageManager::checkImageMemoryLimit($url))
            return false;

        // 'file_exists' doesn't work on distant file, and getimagesize make the import slower.
        // Just hide the warning, the traitment will be the same.
        if (@copy($url, $tmpfile))
        {
            ImageManager::resize($tmpfile, $path.'.jpg');
            $images_types = ImageType::getImagesTypes($entity);
            foreach ($images_types as $image_type)
                ImageManager::resize($tmpfile, $path.'-'.stripslashes($image_type['name']).'.jpg', $image_type['width'], $image_type['height']);

            if (in_array($image_type['id_image_type'], $watermark_types))
                Hook::exec('actionWatermark', ['id_image' => $id_image, 'id_product' => $id_entity]);
        }
        else
        {
            unlink($tmpfile);
            return false;
        }
        unlink($tmpfile);
        return true;
    }

    public function categoryStatus()
    {
        $sql = '
            SELECT c.id_category
            FROM '._DB_PREFIX_.'category c
            WHERE NOT EXISTS 
                (
                    SELECT id_category
                    FROM '._DB_PREFIX_.'category_product cp
                    WHERE c.id_category = cp.id_category
                    GROUP BY cp.id_category
                )
            AND c.active = 1
        ';

        try {
            $results = Db::getInstance()->executeS($sql);
        } catch (PrestaShopException $e) {
            VpDomino::addLog('category_status', 'Could not retrieve categories from database: '.$e->getMessage());
            return;
        }

        // We always except an array as return value
        if(!is_array($results))
            return;

        // Get categories in single dimension array ( for explode/implode )
        $results = array_map('current', $results);

        // Unique category id-s
        $results = array_unique($results);

        $nbr_categories = count($results);

        // If we dont have categories, we are good to stop executing the script
        if($nbr_categories === 0) {
            VpDomino::addLog('category_status', 'All categories are with products or disabled already.');
            return;
        }

        $categories = implode(', ', $results);

        try {
            Db::getInstance()->update('category',[
                'active' => 0,
            ], 'id_category IN ('.$categories.')');
        } catch (PrestaShopException $e) {
            VpDomino::addLog('category_status','Could not disable categories: '.$e->getMessage());
            return;
        }

        VpDomino::addLog('category_status','Disabled ( '.$nbr_categories.' ) categories : '.$categories);
    }

    /*
     ***********************  Start helper functions
     */

    public function getExistingProductIdByDominoId($product)
    {
        if(!is_array($product)) {
             $product = [$product];
         }

         $domino_ids_sql = implode('|', $product);

        $sql = '
            SELECT id_product
            FROM '._DB_PREFIX_.'product
            WHERE id_product_domino REGEXP "'.$domino_ids_sql.'";
        ';

        $results = $this->db->executeS($sql);

        if(empty($results))
            return 0;

        if(count($results) === 1)
            return (int)$results[0]['id_product'];


        $products = [];

        foreach($results as $result) {
            $products[$result['id_domino_product']] = (int)$result['id_product'];
        }

        return $products;
    }

    /**
     * Data modification for smaller arrays and better reading.
     * @param $product
     * @return array
     */
    public function getSimpleProductData($product)
    {
        $relatives = [];

        if(is_array($product['Relatives'])) {
            foreach ($product['Relatives'] as $relative) {
                $relatives[] = $relative['Relative'];
            }
        }

        $models = [];

        if(is_array($product['Models'])) {
            foreach($product['Models'] as $model) {
                $model_data = [
                    'ModelCode' => $model['ModelCode'],
                    'ModelProperties' => [],
                    'Articles' => [],
                ];

                if(is_array($model['ModelProperties'])) {
                    foreach($model['ModelProperties'] as $modelProperty) {
                        $model_data['ModelProperties'][] = [
                            'PropertyName' => $modelProperty['PropertyName'],
                            'PropertyValue' => $modelProperty['PropertyValue'],
                        ];
                    }
                }

                if(is_array($model['Articles'])) {
                    foreach($model['Articles'] as $article) {
                        $model_data['Articles'][] = [
                            'ArticleCode' => $article['ArticleCode'],
                            'ArticleSize' => $article['ArticleSize'],
                            'ArticleColor' => $article['ArticleColor'],
                            'ArticleSpecificColor' => isset($article['ArticleSpecificColor']) ? $article['ArticleSpecificColor'] : null,
                            'UnitPrice' => $article['UnitPrice'],
                            'SpecPrice' => $article['SpecPrice'],
                            'Stocks' => $article['Stocks'],
                        ];
                    }
                }

                $models[] = $model_data;
            }
        }

        $links = [];

        if(is_array($product['Links'])) {
            foreach($product['Links'] as $link) {
                $links[] = [
                    'URL' => $link['URL'],
                    'Name' => $link['Name'],
                ];
            }
        }

        $pictures = [];

        if(is_array($product['Pictures'])) {
            foreach($product['Pictures'] as $picture) {
                $pictures[] = [
                    'URL' => $picture['URL'],
                    'IsMain' => $picture['IsMain'],
                    'Target' => $picture['Target'],
                    'VideoID' => $picture['VideoID'],
                    'VideoSource' => $picture['VideoSource'],
                ];
            }
        }

        $productProperties = [];

        if(is_array($product['ProductProperties'])) {
            foreach($product['ProductProperties'] as $productProperty) {
                $productProperties[] = [
                    'PropertyName' => $productProperty['PropertyName'],
                    'PropertyValue' => $productProperty['PropertyValue'],
                ];
            }
        }

        $files = [];

        if(is_array($product['Files'])) {
            foreach($product['Files'] as $file) {
                $files[] = [
                    'URL' => $file['URL'],
                    'Name' => $file['Name'],
                    'Description' => $file['Description'],
                ];
            }
        }

        $body = $this->cleanProductBody($product['Body']);

        return [
            'ProductName' => $product['ProductName'],
            'ProductCode' => $product['ProductCode'],
            'ProductID' => $product['ProductID'],
            'ProductDescription' => $product['ProductDescription'],
            'Activities' => $product['Activities'],
            'ProductClass' => $product['ProductClass'],
            'ProductSubClass' => $product['ProductSubClass'],
            'SupplierName' => $product['SupplierName'],
            'ProductDefaultWeight' => $product['ProductDefaultWeight'],
            'Relatives' => $relatives,
            'Models' => $models,
            'Links' => $links,
            'Pictures' => $pictures,
            'ProductProperties' => $productProperties,
            'Files' => $files,
            'Body' => $body,
            'newproductdays' => $product['newproductdays'],
            'newhomepage' => $product['newhomepage'],
            'isdiscount' => $product['isdiscount'],
            'discountdate' => $product['discountdate'],
            'discounthomepage' => $product['discounthomepage'],
            'isrecommended' => $product['isrecommended'],
            'recommendedSubClasses' => $product['recommendedSubClasses'],
            'DocSearchKeywords' => $product['DocSearchKeywords'],
            'DocSearchDescription' => $product['DocSearchDescription'],
            'TargetGroup' => $product['TargetGroup'],
        ];
    }

    private function cleanProductBody($body)
    {
        $clean = preg_replace('/style=\\"[^\\"]*\\"/', '', $body);
        $clean = strip_tags($clean, '<p><div><ul><li><b>');
        return $clean;
    }

    /**
     * @param $name
     * @param $id_attribute_group
     * @return int
     */
    public function createAttribute($name, $id_attribute_group)
    {
        $attribute = new Attribute();
        $attribute->name[self::VP_DOMINO_DEFAULT_LANG] = pSQL($name);
        $attribute->id_attribute_group = $id_attribute_group;

        $attributeGroup = new AttributeGroup($id_attribute_group);

        if($attributeGroup->group_type === 'color')
            $attribute->color = '#ffffff';

        try {
            $attribute->save();
        } catch (PrestaShopException $e) {
            VpDomino::addLog('product', 'Can not save attribute: ('.$name. ' - '.$id_attribute_group.') '.$e->getMessage());
            return 0;
        }

        return $attribute->id;
    }

    /**
     * @param $name
     * @return int
     */
    public function createAttributeGroup($name)
    {
        $attributeGroup = new AttributeGroup();
        $attributeGroup->name[self::VP_DOMINO_DEFAULT_LANG] = pSQL($name);
        $attributeGroup->public_name[self::VP_DOMINO_DEFAULT_LANG] = pSQL($name);
        $attributeGroup->group_type = 'radio';

        if($name === 'Värv')
            $attributeGroup->group_type = 'color';

        try {
            $attributeGroup->save();
        } catch (PrestaShopException $e) {
            VpDomino::addLog('product', 'Can not save attribute group: ('.$name.') '.$e->getMessage());
            return 0;
        }

        return $attributeGroup->id;
    }

    /**
     * @param $name
     * @param $id_attribute_group
     * @return int
     */
    public function getAttributeIdByName($name, $id_attribute_group)
    {
        $sql = '
            SELECT a.`id_attribute`
            FROM `'._DB_PREFIX_.'attribute` a
            LEFT JOIN `'._DB_PREFIX_.'attribute_lang` al
                ON (a.`id_attribute` = al.`id_attribute` AND al.`id_lang` = '.(int)self::VP_DOMINO_DEFAULT_LANG.')
            WHERE a.`id_attribute_group` = '.(int)$id_attribute_group.' AND al.`name` = "'.pSQL($name).'"
        ';

        $result = (int)$this->db->getValue($sql);

        if(!$result)
            $result = $this->createAttribute($name, $id_attribute_group);

        return $result;
    }

    /**
     * @param $name
     * @return int
     */
    public function getAttributeGroupIdByName($name)
    {
        $sql = '
			SELECT ag.`id_attribute_group`
			FROM `'._DB_PREFIX_.'attribute_group` ag
			'.Shop::addSqlAssociation('attribute_group', 'ag').'
			LEFT JOIN `'._DB_PREFIX_.'attribute_group_lang` agl
				ON (ag.`id_attribute_group` = agl.`id_attribute_group` AND `id_lang` = '.(int)self::VP_DOMINO_DEFAULT_LANG.')
		    WHERE agl.name = "'.pSql($name).'"
		';

        $result = (int)$this->db->getValue($sql);

        if(!$result)
            $result = (int)$this->createAttributeGroup($name);

        return $result;
    }

    /*
     ***********************  End helper functions
     */

    /*
     ***********************  Start log functions
     */

    public static function addLog($type, $message)
    {

        if(!self::$logs_enabled)
            return;

        // Do not create additional files
        if(!isset(self::$log_files[$type]))
            return;

        if(self::$output)
            echo $message.'<br>';

        $message = [
            'date' => date('Y-m-d H:i:s'),
            'message' => $message
        ];

        // Log depending on type
        $filename = self::$log_folder.$type.'.json';

        $handle = @fopen($filename, 'r+');

        if ($handle === null || $handle === false) {
            $handle = fopen($filename, 'w+');
        }

        if ($handle) {
            fseek($handle, 0, SEEK_END);
            if (ftell($handle) > 0) {
                fseek($handle, -1, SEEK_END);
                fwrite($handle, ',', 1);
                fwrite($handle, self::utfJson($message) . ']');
            } else {
                fwrite($handle, self::utfJson([$message]));
            }
            fclose($handle);
        }
    }

    public function getLog($type)
    {
        $filename = self::$log_folder.$type.'.json';

        $return = false;

        if (file_exists($filename)) {
            $return = json_decode(file_get_contents($filename), true);
        }

        if(is_array($return)) {
            return $return;
        }

        return [];
    }

    public function deleteLog($type)
    {
        $filename = self::$log_folder.$type.'.json';

        $f = @fopen($filename, "r+");

        if ($f !== false) {
            ftruncate($f, 0);
            fclose($f);
        }
    }

    public static function utfJson($body)
    {
        return json_encode($body, JSON_UNESCAPED_UNICODE);
    }

    /*
     *********************** End log functions
     */

    public function convert($size)
    {
        $unit=array('b','kb','mb','gb','tb','pb');
        return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
    }
}
