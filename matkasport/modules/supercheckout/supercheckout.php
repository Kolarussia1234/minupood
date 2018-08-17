<?php
/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 * We offer the best and most useful modules PrestaShop and modifications for your online store.
 *
 * @author    knowband.com <support@knowband.com>
 * @copyright 2017 Knowband
 * @license   see file: LICENSE.txt
 * @category  PrestaShop Module
 *
 * Description
 * Allow admin to configure module settings for shop.
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

include_once dirname(__FILE__) . '/classes/supercheckout_configuration.php';

class Supercheckout extends Module
{
    private $supercheckout_settings = array();
    public $submit_action = 'submit';
    private $custom_errors = array();

    public function __construct()
    {
        $this->name = 'supercheckout';
        $this->tab = 'checkout';
        $this->version = '4.0.2';
        $this->author = 'Knowband';
        $this->need_instance = 0;
        $this->module_key = '68a34cdd0bc05f6305874ea844eefa05';
        $this->ps_versions_compliancy = array('min' => '1.7.0.0', 'max' <= _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('SuperCheckout');
        $this->description = $this->l('One page checkout');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        if (!class_exists('KbMailChimp')) {
            include_once dirname(__FILE__) . '/libraries/mailchimpl library.php';
        }
    }

    public function getErrors()
    {
        return $this->custom_errors;
    }

    public function install()
    {
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        if (!parent::install()
            || !$this->registerHook('displayOrderConfirmation')
            || !$this->registerHook('displayHeader')
            || !$this->registerHook('displayAdminOrderContentShip')
            || !$this->registerHook('displayAdminOrderTabShip')
            || !$this->registerHook('actionValidateOrder')
            || !$this->registerHook('displayOrderDetail')
        ) {
            return false;
        }

        $create_table = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'velsof_supercheckout_translation` (
            `id_field` int(10) NOT NULL auto_increment,
            `id_lang` int(10) NOT NULL,
            `iso_code` char(4) NOT NULL,
            `key` varchar(255) NOT NULL,
            `key_variable` Text NOT NULL,
            `description` Text NULL,
            PRIMARY KEY (`id_field`),
            INDEX (  `id_lang` )
            ) CHARACTER SET utf8 COLLATE utf8_general_ci';
        
        $table_custom_fields = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'velsof_supercheckout_custom_fields` (
				`id_velsof_supercheckout_custom_fields` int(10) NOT NULL AUTO_INCREMENT,
				`type` enum("textbox","selectbox","textarea","radio","checkbox") NOT NULL,
				`position` varchar(50) NOT NULL,
				`required` tinyint(1) NOT NULL,
				`active` tinyint(1) NOT NULL,
				`default_value` varchar(1000) NOT NULL,
				`validation_type` varchar(50) NOT NULL,
				PRIMARY KEY (`id_velsof_supercheckout_custom_fields`)
				)  CHARACTER SET utf8 COLLATE utf8_general_ci';
        
        $table_custom_fields_lang = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'velsof_supercheckout_custom_fields_lang` (
				`id_velsof_supercheckout_custom_fields_lang` int(10) NOT NULL AUTO_INCREMENT,
				`id_velsof_supercheckout_custom_fields` int(10) NOT NULL,
				`id_lang` int(10) NOT NULL,
				`field_label` varchar(250) NOT NULL,
				`field_help_text` varchar(1000) NOT NULL,
				PRIMARY KEY (`id_velsof_supercheckout_custom_fields_lang`)
				)  CHARACTER SET utf8 COLLATE utf8_general_ci';
        
        $table_custom_fields_options = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'velsof_supercheckout_custom_field_options_lang` (
				`id_velsof_supercheckout_custom_field_options_lang` int(10) NOT NULL AUTO_INCREMENT,
				`id_velsof_supercheckout_custom_fields` int(10) NOT NULL,
				`id_lang` int(10) NOT NULL,
				`option_value` varchar(100) NOT NULL,
				`option_label` varchar(1000) NOT NULL,
				PRIMARY KEY (`id_velsof_supercheckout_custom_field_options_lang`)
			       )  CHARACTER SET utf8 COLLATE utf8_general_ci';
        
        $table_custom_fields_data = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'velsof_supercheckout_fields_data` (
				`id_velsof_supercheckout_fields_data` int(10) NOT NULL AUTO_INCREMENT,
				`id_velsof_supercheckout_custom_fields` int(10) NOT NULL,
				`id_order` int(10) NOT NULL,
				`id_cart` int(10) NOT NULL,
				`id_lang` int(10) NOT NULL,
				`field_value` varchar(1000) NOT NULL,
				PRIMARY KEY (`id_velsof_supercheckout_fields_data`)
			       )  CHARACTER SET utf8 COLLATE utf8_general_ci';

        Db::getInstance()->execute($create_table);
        Db::getInstance()->execute($table_custom_fields);
        Db::getInstance()->execute($table_custom_fields_lang);
        Db::getInstance()->execute($table_custom_fields_options);
        Db::getInstance()->execute($table_custom_fields_data);

        $previous_data = array();
        $check_query = 'SELECT * FROM `' . _DB_PREFIX_ . 'velsof_supercheckout_translation`';
        $previous_data = Db::getInstance()->executeS($check_query);
        if (empty($previous_data)) {
            $languages = Db::getInstance()->executeS('SELECT * FROM `' . _DB_PREFIX_ . 'lang`');
            foreach ($languages as $lang) {
                $iso_code = 'en';
                if (file_exists(dirname(__FILE__) . '/translations/translation_sql/' . $lang['iso_code'] . '.sql')) {
                    $iso_code = $lang['iso_code'];
                }

                $languages = Db::getInstance()->execute(
                    'delete FROM `' . _DB_PREFIX_
                    . 'velsof_supercheckout_translation` where id_lang = ' . (int) $lang['id_lang']
                );
                $sql = Tools::file_get_contents(
                    dirname(__FILE__) . '/translations/translation_sql/' . $iso_code . '.sql'
                );
                $sql = str_replace('PREFIX_', _DB_PREFIX_, $sql);
                $sql = str_replace('ID_LANG', $lang['id_lang'], $sql);
                $sql = str_replace('ISO_CODE', $lang['iso_code'], $sql);

                $sql = preg_split("/[\r\n]+/", $sql);
                array_pop($sql);
                $total_query = count($sql);
                for ($i = 1; $i < $total_query; $i++) {
                    $ins_query = trim($sql[0] . $sql[$i], ',');
                    Db::getInstance()->execute(trim($ins_query, ';'));
                }
            }
        }

        if (Configuration::get('VELOCITY_SUPERCHECKOUT')) {
            Configuration::deleteByName('VELOCITY_SUPERCHECKOUT');
        }

        if (Configuration::get('VELOCITY_SUPERCHECKOUT_HEADFOOTHTML')) {
            $data = unserialize((Configuration::get('VELOCITY_SUPERCHECKOUT_HEADFOOTHTML')));
            Configuration::updateValue('VELOCITY_SUPERCHECKOUT_HFHTML', serialize($data));
            Configuration::deleteByName('VELOCITY_SUPERCHECKOUT_HEADFOOTHTML');
        }

        if (Configuration::get('VELOCITY_SUPERCHECKOUT_CUSTOMBUTTON')) {
            $data = unserialize((Configuration::get('VELOCITY_SUPERCHECKOUT_CUSTOMBUTTON')));
            Configuration::updateValue('VELOCITY_SUPERCHECKOUT_BUTTON', serialize($data));
            Configuration::deleteByName('VELOCITY_SUPERCHECKOUT_CUSTOMBUTTON');
        }

        if (Configuration::get('VELOCITY_SUPERCHECKOUT_CUSTOMCSS')) {
            $data = unserialize((Configuration::get('VELOCITY_SUPERCHECKOUT_CUSTOMCSS')));
            $data = urlencode($data);
            Configuration::updateValue('VELOCITY_SUPERCHECKOUT_CSS', serialize($data));
            Configuration::deleteByName('VELOCITY_SUPERCHECKOUT_CUSTOMCSS');
        }

        if (Configuration::get('VELOCITY_SUPERCHECKOUT_CUSTOMJS')) {
            $data = unserialize((Configuration::get('VELOCITY_SUPERCHECKOUT_CUSTOMJS')));
            $data = urlencode($data);
            Configuration::updateValue('VELOCITY_SUPERCHECKOUT_JS', serialize($data));
            Configuration::deleteByName('VELOCITY_SUPERCHECKOUT_CUSTOMJS');
        }

        return true;
    }

    public function uninstall()
    {
        if (!parent::uninstall()
            || !Configuration::deleteByName('VELOCITY_SUPERCHECKOUT')
            || !$this->unregisterHook('displayOrderConfirmation')
            || !$this->unregisterHook('displayHeader')
            || !$this->unregisterHook('displayAdminOrderContentShip')
            || !$this->unregisterHook('displayAdminOrderTabShip')
            || !$this->unregisterHook('actionValidateOrder')
            || !$this->unregisterHook('displayOrderDetail')
        ) {
            return false;
        }

        return true;
    }

    public function getContent()
    {
        if (!class_exists('KbMailChimp')) {
            include_once _PS_MODULE_DIR_ . 'supercheckout/libraries/mailchimpl library.php';
        }
        ini_set('max_input_vars', 2000);
        if (Tools::isSubmit('ajax')) {
            if (Tools::isSubmit('tranlationType')) {
                switch (Tools::getValue('tranlationType')) {
                    case 'save':
                        $this->saveTranslation();
                        break;
                    case 'saveDownload':
                        $this->saveTranslation();
                        break;
                    case 'download':
                        $this->generateTmpLanguageFile();
                        break;
                }
            } elseif (Tools::isSubmit('method')) {
                switch (Tools::getValue('method')) {
                    case 'getMailChimpList':
                        $this->getMailchimpLists(trim(Tools::getValue('key')));
                        break;
                    case 'removeFile':
                        $this->removeFile(trim(Tools::getValue('id')));
                        break;
                }
            } else if (Tools::isSubmit('custom_fields_action')) {
                $json = array();
                switch (Tools::getValue('custom_fields_action')) {
                    case 'deleteCustomFieldRow':
                        $id_velsof_supercheckout_custom_fields = Tools::getValue('id_velsof_supercheckout_custom_fields');
                        $this->deleteWholeRowData($id_velsof_supercheckout_custom_fields);
                        //Called deleteWholeRowData
                    case 'addCustomFieldForm':
                        $custom_field_form_values = Tools::getValue('custom_fields');
                        $id_velsof_supercheckout_custom_fields = $this->addNewCustomField($custom_field_form_values);
                        $result_custom_fields_details = $this->getRowDataCurrentLang($id_velsof_supercheckout_custom_fields);
                        $json['response'] = $result_custom_fields_details[0];
                        break;
                    case 'editCustomFieldForm':
                        $custom_field_form_values = Tools::getValue('edit_custom_fields');
                        $id_velsof_supercheckout_custom_fields = $this->editCustomField($custom_field_form_values);
                        $result_custom_fields_details = $this->getRowDataCurrentLang($id_velsof_supercheckout_custom_fields);
                        $json['response'] = $result_custom_fields_details[0];
                        break;
                    case 'displayEditCustomFieldForm':
                        $id_velsof_supercheckout_custom_fields = Tools::getValue('id');
                        $show_option_field = 0;
                        $result_custom_fields_details_basic = $this->getFieldDetailsBasic($id_velsof_supercheckout_custom_fields);

                        // Setting variable value so that the options field can be showed or hidden by default
                        if ($result_custom_fields_details_basic[0]['type'] == 'selectbox' || $result_custom_fields_details_basic[0]['type'] == 'radio' || $result_custom_fields_details_basic[0]['type'] == 'checkbox') {
                            $show_option_field = 1;
                        }

                        $array_fields_lang = $this->getFieldLangs($id_velsof_supercheckout_custom_fields);
                        $array_fields_options = $this->getFieldOptions($id_velsof_supercheckout_custom_fields);

                        $this->context->smarty->assign('id_velsof_supercheckout_custom_fields', $id_velsof_supercheckout_custom_fields);
                        $this->context->smarty->assign('custom_field_basic_details', $result_custom_fields_details_basic[0]);
                        $this->context->smarty->assign('custom_field_lang_details', $array_fields_lang);
                        $this->context->smarty->assign('custom_field_option_details', $array_fields_options);
                        $this->context->smarty->assign('language_current', $this->context->language->id);
                        $this->context->smarty->assign('languages', Language::getLanguages());
                        $this->context->smarty->assign('show_option_field', $show_option_field);
                        $this->context->smarty->assign('module_dir_url', _MODULE_DIR_);
                        $json['response'] = $this->context->smarty->fetch(_PS_MODULE_DIR_ . 'supercheckout/views/templates/admin/edit_form_custom_fields.tpl');
                        break;
                }
                echo Tools::jsonEncode($json);
                die;
            }
        } elseif (Tools::isSubmit('downloadTranslation') && Tools::getValue('downloadTranslation') != '') {
            if (Tools::isSubmit('translationTmp')) {
                $this->downloadTranslation(Tools::getValue('downloadTranslation'), true);
            } else {
                $this->downloadTranslation(Tools::getValue('downloadTranslation'));
            }
        }

        $this->addBackOfficeMedia();

        $browser = ($_SERVER['HTTP_USER_AGENT']);
        $is_ie7 = false;
        if (preg_match('/(?i)msie [1-7]/', $browser)) {
            $is_ie7 = true;
        }

        $output = null;

        $supercheckout_config = new SupercheckoutConfiguration();

        if (Tools::isSubmit($this->submit_action . $this->name)) {
            $post_data = $supercheckout_config->processPostData(Tools::getValue('velocity_supercheckout'));
            $temp_default = $supercheckout_config->getDefaultSettings();
            $post_data['plugin_id'] = $temp_default['plugin_id'];
            $post_data['version'] = $temp_default['version'];

            $post_data['fb_login']['app_id'] = trim($post_data['fb_login']['app_id']);
            $post_data['fb_login']['app_secret'] = trim($post_data['fb_login']['app_secret']);

            $post_data['google_login']['client_id'] = trim($post_data['google_login']['client_id']);
            $post_data['google_login']['app_secret'] = trim($post_data['google_login']['app_secret']);
            $key_persist_setting = array(
                'fb_login' => array(
                    'app_id' => $post_data['fb_login']['app_id'],
                    'app_secret' => $post_data['fb_login']['app_secret']
                ),
                'google_login' => array(
                    'client_id' => $post_data['google_login']['client_id'],
                    'app_secret' => $post_data['google_login']['app_secret'],
                ),
                'mailchimp' => array(
                    'api' => $post_data['mailchimp']['api'],
                    'list' => $post_data['mailchimp']['list'],
                )
            );

            if (isset($post_data['enable_guest_checkout']) && $post_data['enable_guest_checkout'] == 1) {
                Configuration::updateGlobalValue('PS_GUEST_CHECKOUT_ENABLED', '1');
            }

            Configuration::updateValue('VELOCITY_SUPERCHECKOUT_KEYS', serialize($key_persist_setting));
            $post_data['custom_css'] = urlencode($post_data['custom_css']);
            $post_data['custom_js'] = urlencode($post_data['custom_js']);
            Configuration::updateValue('VELOCITY_SUPERCHECKOUT', serialize($post_data));
            Configuration::updateValue('VELOCITY_SUPERCHECKOUT_CSS', serialize($post_data['custom_css']));
            Configuration::updateValue('VELOCITY_SUPERCHECKOUT_JS', serialize($post_data['custom_js']));
            Configuration::updateValue('VELOCITY_SUPERCHECKOUT_BUTTON', serialize($post_data['customizer']));
            Configuration::updateValue('VELOCITY_SUPERCHECKOUT_HFHTML', serialize($post_data['html_value']));
            Configuration::updateValue('VELOCITY_SUPERCHECKOUT_EXTRAHTML', serialize($post_data['design']['html']));
            if (count($this->custom_errors) > 0) {
                $output .= $this->displayError(implode('<br>', $this->custom_errors));
            } else {
                $output .= $this->displayConfirmation($this->l('Settings has been updated successfully'));
            }
            $payment_post_data = (Tools::getValue('velocity_supercheckout_payment'));

            $payment_error = '';
            foreach (PaymentModule::getInstalledPaymentModules() as $paymethod) {
                $id = $paymethod['id_module'];
                if ($_FILES['velocity_supercheckout_payment']['size']['payment_method'][$id]['logo']['name'] == 0) {
                    $payment_post_data['payment_method'][$id]['logo']['title'] == '';
                } else {
                    $method_file = $_FILES['velocity_supercheckout_payment'];
                    $allowed_exts = array('gif', 'jpeg', 'jpg', 'png', 'JPG', 'PNG', 'GIF', 'JPEG');
                    $extension = explode('.', $method_file['name']['payment_method'][$id]['logo']['name']);
                    $extension = end($extension);
                    $extension = trim($extension);
                    $img_size = $method_file['size']['payment_method'][$id]['logo']['name'];
                    if (($img_size < 300000) && in_array($extension, $allowed_exts)) {
                        $error = $method_file['error']['payment_method'][$id]['logo']['name'];
                        if ($error > 0) {
                            $image_error = $this->l('Error in image of');
                            $payment_error .= '*'." " . $image_error. " " . $paymethod['name'] . '<br/>';
                        } else {
                            $mask = _PS_MODULE_DIR_ . 'supercheckout/views/img/admin/uploads/paymethod'
                                . trim($id) . '.*';
                            $matches = glob($mask);
                            $dest = _PS_MODULE_DIR_ . 'supercheckout/views/img/admin/uploads/paymethod'
                                . trim($id) . '.' . $extension;
                            if (count($matches) > 0) {
                                array_map('unlink', $matches);
                            } if (move_uploaded_file(
                                $method_file['tmp_name']['payment_method'][$id]['logo']['name'],
                                $dest
                            )
                            ) {
                                $payment_post_data['payment_method'][$id]['logo']['title'] = 'paymethod'
                                    . trim($id) . '.' . $extension;
                            } else {
                                $image_error = $this->l('Error in uploading the image of');
                                $payment_error .= '*'." " . $image_error. " " . $paymethod['name'] . '<br/>';
                            }
                            if (!version_compare(_PS_VERSION_, '1.6.0.1', '<')) {
                                Tools::chmodr(_PS_MODULE_DIR_ . 'supercheckout/views/img/uploads', 0755);
                            }
                        }
                    } else {
                        $image_error = $this->l('Error Uploaded file is not a  image');
                        $payment_error .= '*'." " . $image_error. " " . $paymethod['name'] . '<br/>';
                    }
                }
            }
            
            $carriers = Carrier::getCarriers(
                $this->context->language->id,
                true,
                false,
                false,
                null,
                Carrier::ALL_CARRIERS
            );
            foreach ($carriers as $deliverymethod) {
                $id = $deliverymethod['id_carrier'];
                $method_file = $_FILES['velocity_supercheckout_payment'];
                if ($method_file['size']['delivery_method'][$id]['logo']['name'] == 0) {
                    $payment_post_data['delivery_method'][$id]['logo']['title'] == '';
                } else {
                    $allowed_exts = array('gif', 'jpeg', 'jpg', 'png', 'JPG', 'PNG', 'GIF', 'JPEG');
                    $extension = explode(
                        '.',
                        $_FILES['velocity_supercheckout_payment']['name']['delivery_method'][$id]['logo']['name']
                    );
                    $extension = end($extension);
                    $extension = trim($extension);
                    if (($method_file['size']['delivery_method'][$id]['logo']['name'] < 300000)
                        && in_array($extension, $allowed_exts)
                    ) {
                        if ($method_file['error']['delivery_method'][$id]['logo']['name'] > 0) {
                            $payment_error .= '* Error in image of ' . $deliverymethod['name'] . '<br/>';
                        } else {
                            $mask = _PS_MODULE_DIR_ . 'supercheckout/views/img/admin/uploads/deliverymethod'
                                . trim($id) . '.*';
                            $matches = glob($mask);
                            if (count($matches) > 0) {
                                array_map('unlink', $matches);
                            }
                            $dest = _PS_MODULE_DIR_ . 'supercheckout/views/img/admin/uploads/deliverymethod'
                                . trim($id) . '.' . $extension;
                            if (move_uploaded_file(
                                $method_file['tmp_name']['delivery_method'][$id]['logo']['name'],
                                $dest
                            )
                            ) {
                                $payment_post_data['delivery_method'][$id]['logo']['title'] = 'deliverymethod'
                                    . trim($id) . '.' . $extension;
                            } else {
                                $payment_error .= '* Error in uploading the image of '
                                    . $deliverymethod['name'] . '<br/>';
                            }
                            if (!version_compare(_PS_VERSION_, '1.6.0.1', '<')) {
                                Tools::chmodr(_PS_MODULE_DIR_ . 'supercheckout/views/img/uploads', 0755);
                            }
                        }
                    } else {
                        $file_error_msg = $this->l('Error Uploaded file is not an image');
                        $payment_error .= '*'. " " .$file_error_msg ." ". $deliverymethod['name']
                            . '<br/>';
                    }
                }
            }
            Configuration::updateValue('VELOCITY_SUPERCHECKOUT_DATA', serialize($payment_post_data));
            if ($payment_error != '') {
                $output .= $this->displayError($payment_error);
            }
        }

        if (!Configuration::get('VELOCITY_SUPERCHECKOUT') || Configuration::get('VELOCITY_SUPERCHECKOUT') == '') {
            $this->supercheckout_settings = $supercheckout_config->getDefaultSettings();
        } else {
            $this->supercheckout_settings = Tools::unSerialize(Configuration::get('VELOCITY_SUPERCHECKOUT'));
        }

        if (Configuration::get('VELOCITY_SUPERCHECKOUT_CSS')
            || Configuration::get('VELOCITY_SUPERCHECKOUT_CSS') != ''
        ) {
            $this->supercheckout_settings['custom_css'] = Tools::unSerialize(
                Configuration::get('VELOCITY_SUPERCHECKOUT_CSS')
            );
            $this->supercheckout_settings['custom_css'] = urldecode($this->supercheckout_settings['custom_css']);
        }

        if (Configuration::get('VELOCITY_SUPERCHECKOUT_JS') || Configuration::get('VELOCITY_SUPERCHECKOUT_JS') != '') {
            $this->supercheckout_settings['custom_js'] = Tools::unSerialize(
                Configuration::get('VELOCITY_SUPERCHECKOUT_JS')
            );
            $this->supercheckout_settings['custom_js'] = urldecode($this->supercheckout_settings['custom_js']);
        }
        if (Configuration::get('VELOCITY_SUPERCHECKOUT_KEYS')
            || Configuration::get('VELOCITY_SUPERCHECKOUT_KEYS') != ''
        ) {
            $key_details = Tools::unSerialize(Configuration::get('VELOCITY_SUPERCHECKOUT_KEYS'));
            $this->supercheckout_settings['fb_login']['app_id'] = $key_details['fb_login']['app_id'];
            $this->supercheckout_settings['fb_login']['app_secret'] = $key_details['fb_login']['app_secret'];
            $this->supercheckout_settings['google_login']['client_id'] = $key_details['google_login']['client_id'];
            $this->supercheckout_settings['google_login']['app_secret'] = $key_details['google_login']['app_secret'];
            $this->supercheckout_settings['mailchimp']['api'] = $key_details['mailchimp']['api'];
            $this->supercheckout_settings['mailchimp']['list'] = $key_details['mailchimp']['list'];
        } else {
            $key_settings = array(
                'fb_login' => array(
                    'app_id' => '',
                    'app_secret' => ''
                ),
                'google_login' => array(
                    'client_id' => '',
                    'app_secret' => ''
                ),
                'mailchimp' => array(
                    'api' => '',
                    'key' => '',
                    'list' => ''
                )
            );
            Configuration::updateValue('VELOCITY_SUPERCHECKOUT_KEYS', serialize($key_settings));
        }

        if (!Configuration::get('VELOCITY_SUPERCHECKOUT_BUTTON')
            || Configuration::get('VELOCITY_SUPERCHECKOUT_BUTTON') == ''
        ) {
            $custombutton = array(
                'button_color' => 'F77219',
                'button_border_color' => 'EC6723',
                'button_text_color' => 'F9F9F9',
                'border_bottom_color' => 'C52F2F');
        } else {
            $custombutton = unserialize(Configuration::get('VELOCITY_SUPERCHECKOUT_BUTTON'));
        }

        if (!Configuration::get('VELOCITY_SUPERCHECKOUT_DATA')
            || Configuration::get('VELOCITY_SUPERCHECKOUT_DATA') == ''
        ) {
            $paymentdata = array();
        } else {
            $paymentdata = unserialize(Configuration::get('VELOCITY_SUPERCHECKOUT_DATA'));
        }

        $this->supercheckout_settings['customizer']['button_border_color'] = $custombutton['button_border_color'];
        $this->supercheckout_settings['customizer']['button_color'] = $custombutton['button_color'];
        $this->supercheckout_settings['customizer']['button_text_color'] = $custombutton['button_text_color'];
        $this->supercheckout_settings['customizer']['border_bottom_color'] = $custombutton['border_bottom_color'];
        if (!Configuration::get('VELOCITY_SUPERCHECKOUT_HFHTML')
            || Configuration::get('VELOCITY_SUPERCHECKOUT_HFHTML') == ''
        ) {
            $headerfooterhtml = array('header' => '', 'footer' => '');
        } else {
            $headerfooterhtml = unserialize(Configuration::get('VELOCITY_SUPERCHECKOUT_HFHTML'));
        }

        $this->supercheckout_settings['html_value']['header'] = $headerfooterhtml['header'];
        $this->supercheckout_settings['html_value']['footer'] = $headerfooterhtml['footer'];

        //Decode Extra Html
        $this->supercheckout_settings['html_value']['header'] = html_entity_decode(
            $this->supercheckout_settings['html_value']['header']
        );
        $this->supercheckout_settings['html_value']['footer'] = html_entity_decode(
            $this->supercheckout_settings['html_value']['footer']
        );

        if (!Configuration::get('VELOCITY_SUPERCHECKOUT_EXTRAHTML')
            || Configuration::get('VELOCITY_SUPERCHECKOUT_EXTRAHTML') == ''
        ) {
            $extrahtml = array(
                '0_0' => array(
                    '1_column' => array('column' => 0, 'row' => 7, 'column-inside' => 1),
                    '2_column' => array('column' => 2, 'row' => 1, 'column-inside' => 4),
                    '3_column' => array('column' => 3, 'row' => 4, 'column-inside' => 1),
                    'value' => ''
                )
            );
        } else {
            $extrahtml = unserialize(Configuration::get('VELOCITY_SUPERCHECKOUT_EXTRAHTML'));
        }
        foreach ($extrahtml as $key => $value) {
            $extrahtml_value = $extrahtml[$key]['value'];
            if (isset($this->supercheckout_settings['design']['html'][$key])) {
                $this->supercheckout_settings['design']['html'][$key]['value'] = $extrahtml_value;
            } else {
                $this->supercheckout_settings['design']['html'][$key]['1_column'] = $extrahtml[$key]['1_column'];
                $this->supercheckout_settings['design']['html'][$key]['2_column'] = $extrahtml[$key]['2_column'];
                $this->supercheckout_settings['design']['html'][$key]['3_column'] = $extrahtml[$key]['3_column'];
                $this->supercheckout_settings['design']['html'][$key]['value'] = $extrahtml[$key]['value'];
            }
        }

        foreach ($this->supercheckout_settings['design']['html'] as $key => $value) {
            $tmp = $value;
            $html_value = $this->supercheckout_settings['design']['html'][$key]['value'];
            $this->supercheckout_settings['design']['html'][$key]['value'] = html_entity_decode($html_value);
            unset($tmp);
        }

        if (isset($_REQUEST['velsof_layout']) && in_array($_REQUEST['velsof_layout'], array(1, 2, 3))) {
            $layout = $_REQUEST['velsof_layout'];
        } else {
            $layout = $this->supercheckout_settings['layout'];
        }

        $payments = array();
        foreach (PaymentModule::getInstalledPaymentModules() as $pay_method) {
            if (file_exists(_PS_MODULE_DIR_ . $pay_method['name'] . '/' . $pay_method['name'] . '.php')) {
                require_once(_PS_MODULE_DIR_ . $pay_method['name'] . '/' . $pay_method['name'] . '.php');
                if (class_exists($pay_method['name'], false)) {
                    $temp = array();
                    $temp['id_module'] = $pay_method['id_module'];
                    $temp['name'] = $pay_method['name'];
                    $pay_temp = new $pay_method['name'];
                    $temp['display_name'] = $pay_temp->displayName;
                    $payments[] = $temp;
                }
            }
        }

        //Get Default Language Variables
        $curr_lang_code = $this->context->language->iso_code;
        $eng_langs = Db::getInstance()->executeS('SELECT * FROM `' . _DB_PREFIX_ . 'velsof_supercheckout_translation` 
			where iso_code = "' . pSQL($curr_lang_code) . '"');
        $current_lang_translation = array();
        foreach ($eng_langs as $eng_lang) {
            $keys = explode('_', $eng_lang['key']);
            $labels = $keys[count($keys) - 1];
            array_pop($keys);
            $keys = implode('_', $keys);
            $current_lang_translation[$keys][$labels][0] = $eng_lang['key_variable'];
            $current_lang_translation[$keys][$labels][1] = $eng_lang['description'];
        }

        $selected_lang_translation = array();

        if (isset($_REQUEST['velsof_translate_lang']) && $_REQUEST['velsof_translate_lang'] != '') {
            $temp_lang = explode('_', $_REQUEST['velsof_translate_lang']);
            $sel_lang_id = $temp_lang[0];
            $curr_lang_code = $temp_lang[1];
            $default_selected_language = $sel_lang_id;
            $sel_langs = Db::getInstance()->executeS(
                'SELECT * FROM `' . _DB_PREFIX_
                . 'velsof_supercheckout_translation` where iso_code = "' . pSQL($curr_lang_code) . '"'
            );
            if ($sel_langs && count($sel_langs) > 0) {
                foreach ($sel_langs as $cur_lang) {
                    $keys = explode('_', $cur_lang['key']);
                    $labels = $keys[count($keys) - 1];
                    array_pop($keys);
                    $keys = implode('_', $keys);
                    $selected_lang_translation[$keys][$labels][0] = $cur_lang['key_variable'];
                    $selected_lang_translation[$keys][$labels][1] = $cur_lang['description'];
                }
            } else {
                $selected_lang_translation = $current_lang_translation;
            }
        } else {
            $default_selected_language = $this->context->language->id;
            $selected_lang_translation = $current_lang_translation;
        }
        if (_PS_VERSION_ < '1.6.0') {
            $lang_img_dir = _PS_IMG_DIR_ . 'l/';
        } else {
            $lang_img_dir = _PS_LANG_IMG_DIR_;
        }
        $custom_ssl_var = 0;
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
            $custom_ssl_var = 1;
        }
        if ((bool) Configuration::get('PS_SSL_ENABLED') && $custom_ssl_var == 1) {
            $ps_base_url = _PS_BASE_URL_SSL_;
            $manual_dir = _PS_BASE_URL_SSL_ . __PS_BASE_URI__;
        } else {
            $ps_base_url = _PS_BASE_URL_;
            $manual_dir = _PS_BASE_URL_ . __PS_BASE_URI__;
        }

        $this->_clearCache('supercheckout.tpl');
        $admin_action_url = 'index.php?controller=AdminModules&token='
            . Tools::getAdminTokenLite('AdminModules') . '&configure=' . $this->name;
        $highlighted_fields = array(
            'company',
            'address2',
            'postcode',
            'other',
            'phone',
            'phone_mobile',
            'vat_number',
            'dni'
        );
        $this->smarty->assign(array(
            'root_path' => $this->_path,
            'action' => $admin_action_url,
            'cancel_action' => AdminController::$currentIndex . '&token=' . Tools::getAdminTokenLite('AdminModules'),
            'velocity_supercheckout' => $this->supercheckout_settings,
            'highlighted_fields' => $highlighted_fields,
            'layout' => $layout,
            'manual_dir' => $manual_dir,
            'domain' => $_SERVER['HTTP_HOST'],
            'payment_methods' => $payments,
            'carriers' => Carrier::getCarriers(
                $this->context->language->id,
                true,
                false,
                false,
                null,
                Carrier::ALL_CARRIERS
            ),
            'languages' => Language::getLanguages(),
            'submit_action' => $this->submit_action . $this->name,
            'default_selected_language' => $default_selected_language,
            'current_lang_translator_vars' => $current_lang_translation,
            'selected_lang_translator_vars' => $selected_lang_translation,
            'IE7' => $is_ie7,
            'guest_is_enable_from_system' => Configuration::get('PS_GUEST_CHECKOUT_ENABLED'),
            'velocity_supercheckout_payment' => $paymentdata,
            'root_dir' => _PS_ROOT_DIR_,
            'languages' => Language::getLanguages(true),
            'img_lang_dir' => $ps_base_url . __PS_BASE_URI__ . str_replace(_PS_ROOT_DIR_ . '/', '', $lang_img_dir),
            'module_url' => $this->context->link->getModuleLink(
                'supercheckout',
                'supercheckout',
                array(),
                (bool) Configuration::get('PS_SSL_ENABLED')
            )
        ));

        //Added to assign current version of prestashop in a new variable
        if (version_compare(_PS_VERSION_, '1.6.0.1', '<')) {
            $this->smarty->assign('ps_version', 15);
        } else {
            $this->smarty->assign('ps_version', 16);
        }
        
        // Assigning the variables used for Custom Fields functionality

        $current_language_id = $this->context->language->id;

        // Getting the details of custom fields
        // SELECT * FROM velsof_supercheckout_custom_fields cf
        // JOIN velsof_supercheckout_custom_fields_lang cfl
        // ON cf.id_velsof_supercheckout_custom_fields = cfl.id_velsof_supercheckout_custom_fields
        // WHERE id_lang = 1
        $query = 'SELECT * FROM ' . _DB_PREFIX_ . 'velsof_supercheckout_custom_fields cf ';
        $query = $query . 'JOIN ' . _DB_PREFIX_ . 'velsof_supercheckout_custom_fields_lang cfl ';
        $query = $query . 'ON cf.id_velsof_supercheckout_custom_fields = cfl.id_velsof_supercheckout_custom_fields ';
        $query = $query . "WHERE id_lang = $current_language_id";

        $result_custom_fields_details = Db::getInstance()->executeS($query);

        foreach ($result_custom_fields_details as $key => $field_details) {
            $result_custom_fields_details[$key]['position'] = ucwords(str_replace("_", " ", $field_details['position']));
        }

        $this->smarty->assign('language_current', $current_language_id);
        $this->smarty->assign('custom_fields_details', $result_custom_fields_details);
        $this->context->smarty->assign('module_dir_url', _MODULE_DIR_);
        

        $output .= $this->display(__FILE__, 'views/templates/admin/supercheckout.tpl');
        return $output;
    }

    /*
     * Add css and javascript
     */

    protected function addBackOfficeMedia()
    {
        //CSS files
        $this->context->controller->addCSS($this->_path . 'views/css/supercheckout.css');
        $this->context->controller->addCSS($this->_path . 'views/css/bootstrap.css');
        $this->context->controller->addCSS($this->_path . 'views/css/responsive.css');
        $this->context->controller->addCSS($this->_path . 'views/css/jquery-ui/jquery-ui.min.css');
        $this->context->controller->addCSS($this->_path . 'views/css/fonts/glyphicons/glyphicons_regular.css');
        $this->context->controller->addCSS($this->_path . 'views/css/fonts/font-awesome/font-awesome.min.css');
        $this->context->controller->addCSS($this->_path . 'views/css/pixelmatrix-uniform/uniform.default.css');
        $this->context->controller->addCSS($this->_path . 'views/css/bootstrap-switch/bootstrap-switch.css');
        $this->context->controller->addCSS($this->_path . 'views/css/select2/select2.css');
        $this->context->controller->addCSS($this->_path . 'views/css/style-light.css');
        $this->context->controller->addCSS($this->_path . 'views/css/bootstrap-select/bootstrap-select.css');
        $this->context->controller->addCSS($this->_path . 'views/css/jQRangeSlider/iThing.css');
        $this->context->controller->addCSS($this->_path . 'views/css/jquery-miniColors/jquery.miniColors.css');

        $this->context->controller->addJs($this->_path . 'views/js/jquery-ui/jquery-ui.min.js');
        $this->context->controller->addJs($this->_path . 'views/js/bootstrap.min.js');
        $this->context->controller->addJs($this->_path . 'views/js/common.js');
        $this->context->controller->addJs($this->_path . 'views/js/system/less.min.js');
        $this->context->controller->addJs($this->_path . 'views/js/tinysort/jquery.tinysort.min.js');
        $this->context->controller->addJs($this->_path . 'views/js/jquery/jquery.autosize.min.js');
        $this->context->controller->addJs($this->_path . 'views/js/uniform/jquery.uniform.min.js');
        $this->context->controller->addJs($this->_path . 'views/js/tooltip/tooltip.js');
        $this->context->controller->addJs($this->_path . 'views/js/bootbox.js');
        $this->context->controller->addJs($this->_path . 'views/js/bootstrap-select/bootstrap-select.js');
        $this->context->controller->addJs($this->_path . 'views/js/bootstrap-switch/bootstrap-switch.js');
        $this->context->controller->addJs($this->_path . 'views/js/system/jquery.cookie.js');
        $this->context->controller->addJs($this->_path . 'views/js/themer.js');
        $this->context->controller->addJs($this->_path . 'views/js/admin/jscolor.js');
        $this->context->controller->addJs($this->_path . 'views/js/admin/clipboard.min.js');

        $this->context->controller->addJs($this->_path . 'views/js/jquery-miniColors/jquery.miniColors.js');

        $this->context->controller->addJs($this->_path . 'views/js/supercheckout.js?v=1');

        if (!version_compare(_PS_VERSION_, '1.6.0.1', '<')) {
            $this->context->controller->addCSS($this->_path . 'views/css/supercheckout_16_admin.css');
        } else {
            $this->context->controller->addCSS($this->_path . 'views/css/supercheckout_15_admin.css');
        }
    }

    /*
     * Handle ajax requests for language translation
     */

    public function saveTranslation()
    {
        $data = array('velocity_transalator' => Tools::getValue('velocity_transalator'));
        $temp_var = explode('_', $data['velocity_transalator']['selected_language']);
        $language_id = $temp_var[0];
        $language_iso_code = $temp_var[1];
        $json = array();
        $translation_dir = _PS_MODULE_DIR_ . 'supercheckout/translations/';
        $file_path = $translation_dir . $language_iso_code . '.php';

        unset($data['velocity_transalator']['selected_language']);

        $del_trans_sql = 'delete FROM `' . _DB_PREFIX_ . 'velsof_supercheckout_translation` where id_lang = '
            . (int) $language_id;
        Db::getInstance()->execute($del_trans_sql);
        foreach ($data['velocity_transalator'] as $key => $lang_label) {
            $ins_query = 'INSERT INTO `' . _DB_PREFIX_ . 'velsof_supercheckout_translation` 
                (`id_lang`, `iso_code`, `key`, `key_variable`, `description`) VALUES ';
            if (isset($lang_label['label'])) {
                $query = '(' . (int) $language_id . ', \'' . pSQL($language_iso_code) . '\', \''
                    . pSQL($key) . '_label\', \''
                    . str_replace("'", "''", pSQL($lang_label['label'][0]))
                    . '\', \'' . str_replace("'", "''", pSQL($lang_label['label'][1])) . '\')';
                Db::getInstance()->execute($ins_query . $query);
            }
            if (isset($lang_label['tooltip'])) {
                $query = '(' . (int) $language_id . ', \'' . pSQL($language_iso_code) . '\', \''
                    . pSQL($key) . '_tooltip\', \''
                    . str_replace("'", "''", pSQL($lang_label['tooltip'][0]))
                    . '\', \'' . str_replace("'", "''", pSQL($lang_label['tooltip'][1])) . '\')';
                Db::getInstance()->execute($ins_query . $query);
            }
        }

        $json['success'] = $this->l('Language successfully translated');
        if (is_writable($translation_dir)) {
            $this->generateLanguageFile($file_path, $data);
        } else {
            $json['error'] = $this->l('Permission errorred occur for language file creating');
        }

        echo Tools::jsonEncode($json);
        die;
    }

    private function generateLanguageFile($file_path, $data)
    {
        $f = fopen($file_path, 'w+');
        fwrite($f, '<?php ' . PHP_EOL . PHP_EOL);
        fwrite($f, 'global $_MODULE;' . PHP_EOL);
        fwrite($f, '$_MODULE = array();' . PHP_EOL . PHP_EOL);

        foreach ($data['velocity_transalator'] as $lang_label) {
            $template_files = array();
            if (isset($lang_label['label'])) {
                if (isset($lang_label['label'][2])) {
                    $template_files = explode('|', $lang_label['label'][2]);
                }
                array_push($template_files, 'supercheckout');
                foreach ($template_files as $template) {
                    $language = '$_MODULE[\'<{supercheckout}prestashop>' . $template . '_'
                        . md5($lang_label['label'][0]) . '\'] = \''
                        . strip_tags(addslashes($lang_label['label'][1])) . '\';';
                    fwrite($f, $language . PHP_EOL);
                }
            }
            $template_files = array();
            if (isset($lang_label['tooltip'])) {
                if (isset($lang_label['tooltip'][2])) {
                    $template_files = explode('|', $lang_label['tooltip'][2]);
                }
                array_push($template_files, 'supercheckout');
                foreach ($template_files as $template) {
                    $language = '$_MODULE[\'<{supercheckout}prestashop>' . $template . '_'
                        . md5($lang_label['tooltip'][0]) . '\'] = \''
                        . strip_tags(addslashes($lang_label['tooltip'][1])) . '\'; //'
                        . $lang_label['tooltip'][0];
                    fwrite($f, $language . PHP_EOL);
                }
            }
        }

        fwrite($f, PHP_EOL);
        fwrite($f, 'return $_MODULE;');
        fclose($f);
    }

    private function generateTmpLanguageFile()
    {
        $data = array('velocity_transalator' => Tools::getValue('velocity_transalator'));
        $temp_var = explode('_', $data['velocity_transalator']['selected_language']);
        $language_iso_code = $temp_var[1];
        unset($data['velocity_transalator']['selected_language']);

        $json = array();
        $translation_dir = _PS_MODULE_DIR_ . 'supercheckout/translations/tmp/';
        $file_path = $translation_dir . $language_iso_code . '.php';

        if (is_writable($translation_dir)) {
            $this->generateLanguageFile($file_path, $data, $language_iso_code);
            $json['success'] = $language_iso_code;
        } else {
            $json['error'] = $this->l('Permission errorred occur for language file creating');
        }

        echo Tools::jsonEncode($json);
        die;
    }

    private function downloadTranslation($file_name, $is_tmp = false)
    {
        $translation_dir = _PS_MODULE_DIR_ . 'supercheckout/translations/';
        if ($is_tmp) {
            $translation_dir .= 'tmp/';
        }
        $file = $translation_dir . $file_name . '.php';
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;
    }

    /*
     * Creae log of all scratch coupon activity on front end
     */

    private function writeLog($type, $msg)
    {
        $f = fopen('log.txt', 'a+');
        fwrite($f, $type . "\t" . date('m-d-Y H:i:s', time()) . "\t" . $msg);
        fwrite($f, "\n");
        fclose($f);
    }

    public function hookDisplayHeader()
    {
        $settings = array();
        $supercheckout_config = new SupercheckoutConfiguration();
        if (!Configuration::get('VELOCITY_SUPERCHECKOUT') || Configuration::get('VELOCITY_SUPERCHECKOUT') == '') {
            $settings = $supercheckout_config->getDefaultSettings();
        } else {
            $settings = unserialize(Configuration::get('VELOCITY_SUPERCHECKOUT'));
        }

        if (!Tools::getValue('klarna_supercheckout')) {
            if (isset($settings['super_test_mode']) && $settings['super_test_mode'] != 1) {
                $page_name = $this->context->smarty->tpl_vars['page']->value['page_name'];
                if ($page_name == 'order-opc' || $page_name == 'order' || $page_name == 'checkout') {
                    if ($settings['enable'] == 1) {
                        $current_page_url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                        $query_string = parse_url($current_page_url);
                        $query_params = array();
                        if (isset($query_string['query'])) {
                            parse_str($query_string['query'], $query_params);
                            if (isset($query_params['isPaymentStep'])) {
                                unset($query_params['isPaymentStep']);
                            }
                        }
                        Tools::redirect(
                            $this->context->link->getModuleLink(
                                $this->name,
                                $this->name,
                                $query_params,
                                (bool) Configuration::get('PS_SSL_ENABLED')
                            )
                        );
                    }
                }
            }
        }

        if (Configuration::get('VELOCITY_SUPERCHECKOUT_CSS')
            || Configuration::get('VELOCITY_SUPERCHECKOUT_CSS') != ''
        ) {
            $settings['custom_css'] = unserialize((Configuration::get('VELOCITY_SUPERCHECKOUT_CSS')));
            $settings['custom_css'] = urldecode($settings['custom_css']);
        }

        if (Configuration::get('VELOCITY_SUPERCHECKOUT_JS')
            || Configuration::get('VELOCITY_SUPERCHECKOUT_JS') != ''
        ) {
            $settings['custom_js'] = unserialize((Configuration::get('VELOCITY_SUPERCHECKOUT_JS')));
            $settings['custom_js'] = urldecode($settings['custom_js']);
        }

        if (isset($settings['custom_css'])) {
            $this->smarty->assign($settings['custom_css']);
        }

        if (isset($settings['custom_js'])) {
            $this->smarty->assign($settings['custom_js']);
        }
    }

    public function hookDisplayOrderConfirmation($params = null)
    {
        if (Configuration::get('PACZKAWRUCHU_CARRIER_ID')) {
            $carrier = Configuration::get('PACZKAWRUCHU_CARRIER_ID');
            $order_carrier_id = $params['objOrder']->id_carrier;
            $cart_id = $params['objOrder']->id_cart;
            if ($order_carrier_id != $carrier) {
                $delete_query = 'delete from `' . _DB_PREFIX_ . 'paczkawruchu` WHERE id_cart=' . (int) $cart_id;
                Db::getInstance(_PS_USE_SQL_SLAVE_)->execute($delete_query);
            }
        }
        unset($params);
        if (isset($this->context->cookie->supercheckout_temp_address_delivery)
            && $this->context->cookie->supercheckout_temp_address_delivery
        ) {
            $temp_address_delivery = $this->context->cookie->supercheckout_temp_address_delivery;
            $perm_address_delivery = $this->context->cookie->supercheckout_perm_address_delivery;
            if ($temp_address_delivery != $perm_address_delivery) {
                Db::getInstance(_PS_USE_SQL_SLAVE_)->execute('delete from ' . _DB_PREFIX_ . 'address 
					where id_address = ' . (int) $this->context->cookie->supercheckout_temp_address_delivery);
            }
            $this->context->cookie->supercheckout_temp_address_delivery = 0;
            $this->context->cookie->__unset($this->context->cookie->supercheckout_temp_address_delivery);
        }
        if (isset($this->context->cookie->supercheckout_temp_address_invoice)
            && $this->context->cookie->supercheckout_temp_address_invoice
        ) {
            $temp_address_invoice = $this->context->cookie->supercheckout_temp_address_invoice;
            $perm_address_invoice = $this->context->cookie->supercheckout_perm_address_invoice;
            if ($temp_address_invoice != $perm_address_invoice) {
                Db::getInstance(_PS_USE_SQL_SLAVE_)->execute('delete from ' . _DB_PREFIX_ . 'address 
					where id_address = ' . (int) $this->context->cookie->supercheckout_temp_address_invoice);
            }
            $this->context->cookie->supercheckout_temp_address_invoice = 0;
            $this->context->cookie->__unset($this->context->cookie->supercheckout_temp_address_invoice);
        }
        $this->context->cookie->supercheckout_perm_address_delivery = 0;
        $this->context->cookie->__unset($this->context->cookie->supercheckout_perm_address_delivery);
        $this->context->cookie->supercheckout_perm_address_invoice = 0;
        $this->context->cookie->__unset($this->context->cookie->supercheckout_perm_address_invoice);
    }

    protected function getMailchimpLists($mailchimp_api)
    {
        try {
            $id = $mailchimp_api;
            $mchimp = new KbMailChimp($id);
            $arrchimp = ($mchimp->call('lists/list'));
            $totallists = $arrchimp['total'];
            if ($totallists >= 1) {
                $listchimp = $arrchimp['data'];
                echo Tools::jsonEncode($listchimp);
            } else {
                echo Tools::jsonEncode(array('false'));
            }
        } catch (Exception $e) {
            echo Tools::jsonEncode(array('false'));
        }
        die;
    }

    protected function removeFile($id)
    {
        $mask = _PS_MODULE_DIR_ . 'supercheckout/views/img/admin/uploads/' . trim($id) . '.*';
        $matches = glob($mask);
        if (count($matches) > 0) {
            array_map('unlink', $matches);
            echo 1;
        }
        die;
    }
    
    public function addNewCustomField($custom_field_form_values)
    {
        $type = $custom_field_form_values['type'];
        $position = $custom_field_form_values['position'];
        $required = $custom_field_form_values['required'];
        $active = $custom_field_form_values['active'];
        $default_value = $custom_field_form_values['default_value'];
        $validation_type = $custom_field_form_values['validation_type'];

        // Making validation type none
        if ($type == 'selectbox' || $type == 'checkbox' || $type == 'radio') {
            $validation_type = 0;
        }

        $labels = $custom_field_form_values['field_label'];
        // Calling the function which processes multilang field data
        $labels = $this->processMultilangFieldValues($labels);

        $help_texts = $custom_field_form_values['help_text'];
        // Calling the function which processes multilang field data
        $help_texts = $this->processMultilangFieldValues($help_texts);

        $field_options = $custom_field_form_values['field_options'];
        // Calling the function which processes multilang field data
        $field_options = $this->processMultilangFieldValues($field_options);

        // Save data into velsof_supercheckout_custom_fields table
        $field_data = array(
            'type' => $type,
            'position' => $position,
            'required' => $required,
            'active' => $active,
            'default_value' => $default_value,
            'validation_type' => $validation_type,
        );
        Db::getInstance()->insert('velsof_supercheckout_custom_fields', $field_data);

        // Getting the last inserted id
        $id_velsof_supercheckout_custom_fields = Db::getInstance()->Insert_ID();

        // Save data into velsof_supercheckout_custom_fields_lang table
        $this->saveFieldLangs($id_velsof_supercheckout_custom_fields, $labels, $help_texts);

        // Saving the data into velsof_supercheckout_custom_field_options_lang table
        $this->saveFieldOptions($id_velsof_supercheckout_custom_fields, $field_options);
        return $id_velsof_supercheckout_custom_fields;
    }
    
    /**
     * Function which processes all the multilang field values and sets default values in empty indexes
     * @param type $arary_filed_values
     * @return type
     */
    public function processMultilangFieldValues($arary_filed_values)
    {
        $arr_empty_indexes = array();
        $flag_first = 0;
        foreach ($arary_filed_values as $id_lang => $field_value) {
            // If field_value is empty then store the languade id in the array so that we can process it later
            if (empty($field_value)) {
                $arr_empty_indexes[] = $id_lang;
            } else {
                // If first label with some value is found
                if ($flag_first == 0) {
                    $default_label_value = $field_value;
                    $flag_first = 1;
                }
            }
        }

        // Setting the value of first field into all the empty labels
        foreach ($arr_empty_indexes as $id_lang) {
            $arary_filed_values[$id_lang] = $default_label_value;
        }
        return $arary_filed_values;
    }
    
    /**
     * Function to save the options data into the database
     * @param type $id_velsof_supercheckout_custom_fields
     * @param type $field_options
     */
    public function saveFieldOptions($id_velsof_supercheckout_custom_fields, $field_options)
    {
        //d($field_options);
        foreach ($field_options as $id_lang => $option_lang_wise) {
            $array_options = explode("\n", $option_lang_wise);
            foreach ($array_options as $option) {
                if (!empty($option)) {
                    // Exploding the option textbox rows using |. On doing this we will get option value on 0th index and option label on 1st index
                    $array_option_data = explode('|', $option);
                    $option_data_lang = array(
                        'id_velsof_supercheckout_custom_fields' => $id_velsof_supercheckout_custom_fields,
                        'id_lang' => $id_lang,
                        'option_value' => $array_option_data[0],
                        'option_label' => $array_option_data[1]
                    );
                    Db::getInstance()->insert('velsof_supercheckout_custom_field_options_lang', $option_data_lang);
                }
            }
        }
    }
    
    /**
     * Function to save the multilangual data into the database
     * @param type $id_velsof_supercheckout_custom_fields
     * @param type $label
     * @param type $help_texts
     */
    public function saveFieldLangs($id_velsof_supercheckout_custom_fields, $labels, $help_texts)
    {
        foreach ($labels as $id_lang => $label) {
            $field_data_lang = array(
                'id_velsof_supercheckout_custom_fields' => $id_velsof_supercheckout_custom_fields,
                'id_lang' => $id_lang,
                'field_label' => $label,
                'field_help_text' => $help_texts[$id_lang],
            );
            Db::getInstance()->insert('velsof_supercheckout_custom_fields_lang', $field_data_lang);
        }
    }
    
    /**
     * Returns the field basic details
     * @param type $id_velsof_supercheckout_custom_fields
     * @return type
     */
    public function getFieldDetailsBasic($id_velsof_supercheckout_custom_fields)
    {
        //Getting all values of a custom field to pass it in the edit form tpl file which is randered when edit icon is clicked
        $query = 'SELECT * FROM ' . _DB_PREFIX_ . 'velsof_supercheckout_custom_fields cf ';
        $query = $query . 'WHERE cf.id_velsof_supercheckout_custom_fields = ' . "'$id_velsof_supercheckout_custom_fields'";
        return Db::getInstance()->executeS($query);
    }
    
    /**
     * Returns the field language values in suitable format
     * @return type
     */
    public function getFieldLangs($id_velsof_supercheckout_custom_fields)
    {
        $query_field_lang = 'SELECT * FROM ' . _DB_PREFIX_ . 'velsof_supercheckout_custom_fields_lang cfl ';
        $query_field_lang .= 'WHERE cfl.id_velsof_supercheckout_custom_fields = ' . "'$id_velsof_supercheckout_custom_fields'";
        $result_custom_fields_details_field_lang = Db::getInstance()->executeS($query_field_lang);
        //Converting array into suitable format
        $array_fields_lang = array();
        foreach ($result_custom_fields_details_field_lang as $lang_data) {
            $array_fields_lang[$lang_data['id_lang']] = array(
                'field_label' => $lang_data['field_label'],
                'field_help_text' => $lang_data['field_help_text'],
            );
        }
        return $array_fields_lang;
    }
    
    /**
     * Returns the field options in suitable format
     * @param type $id_velsof_supercheckout_custom_fields
     * @return type
     */
    public function getFieldOptions($id_velsof_supercheckout_custom_fields)
    {
        $query_field_options = 'SELECT * FROM ' . _DB_PREFIX_ . 'velsof_supercheckout_custom_field_options_lang cfol ';
        $query_field_options .= 'WHERE cfol.id_velsof_supercheckout_custom_fields = ' . "'$id_velsof_supercheckout_custom_fields'";
        $result_custom_fields_details_field_options = Db::getInstance()->executeS($query_field_options);
        //Converting array into suitable format and converting into raw format again
        $array_fields_options = array();
        foreach ($result_custom_fields_details_field_options as $lang_data) {
            $option_value = $lang_data['option_value'];
            $option_label = $lang_data['option_label'];
            $array_fields_options[$lang_data['id_lang']] .= "$option_value|$option_label";
        }
        return $array_fields_options;
    }
    
    public function editCustomField($custom_field_form_values)
    {
        $id_velsof_supercheckout_custom_fields = $custom_field_form_values['id_velsof_supercheckout_custom_fields'];
        $type = $custom_field_form_values['type'];
        $position = $custom_field_form_values['position'];
        $required = $custom_field_form_values['required'];
        $active = $custom_field_form_values['active'];
        $default_value = $custom_field_form_values['default_value'];
        $validation_type = $custom_field_form_values['validation_type'];

        $labels = $custom_field_form_values['field_label'];
        //Calling the function which processes multilang field data
        $labels = $this->processMultilangFieldValues($labels);

        $help_texts = $custom_field_form_values['help_text'];
        // Calling the function which processes multilang field data
        $help_texts = $this->processMultilangFieldValues($help_texts);

        $field_options = $custom_field_form_values['field_options'];
        // Calling the function which processes multilang field data
        $field_options = $this->processMultilangFieldValues($field_options);

        // Making validation type none
        if ($type == 'selectbox' || $type == 'checkbox' || $type == 'radio') {
            $validation_type = 0;
        }

        // Updating the value into velsof_supercheckout_custom_fields table
        $update_field_data = array(
            'type' => $type,
            'position' => $position,
            'required' => $required,
            'active' => $active,
            'default_value' => $default_value,
            'validation_type' => $validation_type,
        );
        $where = "id_velsof_supercheckout_custom_fields = $id_velsof_supercheckout_custom_fields";
        Db::getInstance()->update('velsof_supercheckout_custom_fields', $update_field_data, $where);

        // Delete previously saved data from velsof_supercheckout_custom_fields_lang table
        $where_delete = 'id_velsof_supercheckout_custom_fields = ' . $id_velsof_supercheckout_custom_fields;
        Db::getInstance()->delete('velsof_supercheckout_custom_fields_lang', $where_delete);

        // Insert new data into the table
        $this->saveFieldLangs($id_velsof_supercheckout_custom_fields, $labels, $help_texts);

        // Delete the previously saved data from velsof_supercheckout_custom_field_options_lang table
        $where_delete = "id_velsof_supercheckout_custom_fields = $id_velsof_supercheckout_custom_fields";
        Db::getInstance()->delete('velsof_supercheckout_custom_field_options_lang', $where_delete);

        // Insert new data into velsof_supercheckout_custom_field_options_lang table
        $this->saveFieldOptions($id_velsof_supercheckout_custom_fields, $field_options);

        return $id_velsof_supercheckout_custom_fields;
    }
    
    /**
     * Returns the row data of current selected language from custom fields tables
     * @param type $id_velsof_supercheckout_custom_fields
     */
    public function getRowDataCurrentLang($id_velsof_supercheckout_custom_fields)
    {
        $current_language_id = $this->context->language->id;
        // Getting details of the row
        $query = 'SELECT * FROM ' . _DB_PREFIX_ . 'velsof_supercheckout_custom_fields cf ';
        $query = $query . 'JOIN ' . _DB_PREFIX_ . 'velsof_supercheckout_custom_fields_lang cfl ';
        $query = $query . 'ON cf.id_velsof_supercheckout_custom_fields = cfl.id_velsof_supercheckout_custom_fields ';
        $query = $query . 'WHERE cf.id_velsof_supercheckout_custom_fields = ' . "'$id_velsof_supercheckout_custom_fields'" . ' AND
			id_lang = ' . "'$current_language_id'";
        return Db::getInstance()->executeS($query);
    }
    
    /**
     * Deletes data from all tables
     * @param type $id_velsof_supercheckout_custom_fields
     */
    public function deleteWholeRowData($id_velsof_supercheckout_custom_fields)
    {
        $where_delete = "id_velsof_supercheckout_custom_fields = $id_velsof_supercheckout_custom_fields";
        Db::getInstance()->delete('velsof_supercheckout_custom_fields', $where_delete);
        Db::getInstance()->delete('velsof_supercheckout_custom_fields_lang', $where_delete);
        Db::getInstance()->delete('velsof_supercheckout_custom_field_options_lang', $where_delete);
    }
    
    /**
     * Function returns the data of custom fields stored for given order
     * @return type
     */
    public function getFieldsDataToDisplay($id_order)
    {
        $id_lang = $this->context->language->id;

        // Query to get all the data of fields according to the order id
        $query = 'SELECT fd.*, cfl.*, cf.type FROM ' . _DB_PREFIX_ . 'velsof_supercheckout_fields_data fd ';
        $query = $query . 'JOIN ' . _DB_PREFIX_ . 'velsof_supercheckout_custom_fields_lang cfl ';
        $query = $query . 'ON fd.id_velsof_supercheckout_custom_fields = cfl.id_velsof_supercheckout_custom_fields ';
        $query = $query . 'JOIN ' . _DB_PREFIX_ . 'velsof_supercheckout_custom_fields cf ';
        $query = $query . 'ON cf.id_velsof_supercheckout_custom_fields = cfl.id_velsof_supercheckout_custom_fields ';
        $query = $query . 'WHERE id_order = ' . "'$id_order'" . ' AND cfl.id_lang = ' . "'$id_lang'";
        $result_fields_data = Db::getInstance()->executeS($query);

        // Processing checkboxes data
        foreach ($result_fields_data as $key => $field) {
            if ($field['type'] == 'checkbox') {
                $array_checkbox_values = Tools::unserialize($field['field_value']);
                // Getting option value labels
                $array_labels = array();
                $option_label = '';
                foreach ($array_checkbox_values as $option_value) {
                    $query = 'SELECT option_label FROM ' . _DB_PREFIX_ . "velsof_supercheckout_custom_field_options_lang WHERE option_value = '$option_value'";
                    $result_label = Db::getInstance()->executeS($query);
                    if (isset($result_label[0])) {
                        $array_labels[] = $result_label[0]['option_label'];
                    }
                }

                // Implode the values. Here we are getting the final string containing all the labels
                $option_label = implode(', ', $array_labels);

                // Replace the serialized string with the newly created string
                $result_fields_data[$key]['field_value'] = $option_label;
            }
            if ($field['type'] == 'selectbox' || $field['type'] == 'radio') {
                $my_option = $field['field_value'];
                $query = 'SELECT option_label FROM ' . _DB_PREFIX_ . 'velsof_supercheckout_custom_field_options_lang WHERE option_value = "' . $my_option . '"';
                $result_label = Db::getInstance()->executeS($query);
                if (isset($result_label[0])) {
                    $result_fields_data[$key]['field_value'] = $result_label[0]['option_label'];
                }
            }
        }
        return $result_fields_data;
    }
    
    public function hookDisplayAdminOrderContentShip()
    {
        //display tab content in order(admin) page
        $module_settings = Tools::unserialize(Configuration::get('VELOCITY_SUPERCHECKOUT'));

        if ($module_settings['enable'] == 1) {
            $empty = 0;
            $id_order = Tools::getValue('id_order');
            $result_fields_data = $this->getFieldsDataToDisplay($id_order);

            if (empty($result_fields_data)) {
                $empty = 1;
            }

            $this->smarty->assign('fields_data', $result_fields_data);
            $this->smarty->assign('empty', $empty);
            return $this->display(__FILE__, 'custom_fields_data_content.tpl');
        }
    }
    
    public function hookDisplayAdminOrderTabShip()
    {
        //display tab in order(admin) page
        $module_settings = Tools::unserialize(Configuration::get('VELOCITY_SUPERCHECKOUT'));
        if ($module_settings['enable'] == 1) {
            $this->context->controller->addCSS($this->_path . 'views/css/preferred_delivery.css');
            return $this->display(__FILE__, 'custom_fields_data_tab.tpl');
        }
    }
    
    public function hookActionValidateOrder($params)
    {
        // This hook is called when an order is created
        $id_cart = $params['cart']->id;
        $id_order = $params['order']->id;

        // Updating the order id in the table
        $data = array(
            'id_order' => $id_order
        );
        $where = "id_cart = '$id_cart'";
        Db::getInstance()->update('velsof_supercheckout_fields_data', $data, $where);
    }
    
    public function hookDisplayOrderDetail()
    {
        // Hook to display details in order details page
        $module_settings = Tools::unserialize(Configuration::get('VELOCITY_SUPERCHECKOUT'));

        if ($module_settings['enable'] == 1) {
            $empty = 0;
            $id_order = Tools::getValue('id_order');
            $result_fields_data = $this->getFieldsDataToDisplay($id_order);

            if (empty($result_fields_data)) {
                $empty = 1;
            }

            $this->smarty->assign('fields_data', $result_fields_data);
            $this->smarty->assign('empty', $empty);
            return $this->display(__FILE__, 'custom_fields_data_on_order_history.tpl');
        }
    }
}
