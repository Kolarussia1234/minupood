<?php
/**
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2018 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

class StaticVariables extends Module
{
    protected $config_form = false;

    public function __construct()
    {
        $this->name = 'staticvariables';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Veebipoed';
        $this->need_instance = 0;
        $this->carrierid = null;

        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Static Variables');
        $this->description = $this->l('Allows the saving of static variables in strings');

        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
    }
    /**
     * Creates tables
     */
    protected function createTables()
    {
        /* Slides */
        $res = (bool)Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'staticvariables` (
                `id_variable` int(10) unsigned NOT NULL AUTO_INCREMENT,
	            `name` varchar(255) NOT NULL,
	            `value` varchar(255) NOT NULL,
              PRIMARY KEY (`id_variable`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;
        ');

        return $res;
    }
    /**
     * deletes tables
     */
    protected function deleteTables()
    {
        return Db::getInstance()->execute('
            DROP TABLE IF EXISTS `'._DB_PREFIX_.'staticvariables`;
        ');
    }
    /**
     * Don't forget to create update methods if needed:
     * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
     */
    public function install()
    {
        if (parent::install() &&
            $this->registerHook('header') &&
            $this->registerHook('backOfficeHeader') &&
            $this->registerHook('displayAdminOrderContentShip')
        ) {

            if (extension_loaded('curl') == false)
            {
                $this->_errors[] = $this->l('You have to enable the cURL extension on your server to install this module');
                return false;
            }


            /* Creates tables */
            $res = $this->createTables();

            return (bool)$res;
        }

        return false;

    }
    public static function getVariables()
    {

        $sql = 'SELECT `id_variable`, `name`, `value` ' .
            'FROM `' . _DB_PREFIX_ . 'staticvariables`';

        return Db::getInstance()->executeS($sql);
    }
    public static function getVariable($id)
    {
        $sql = 'SELECT `id_variable`, `name`, `value` ' .
            'FROM `' . _DB_PREFIX_ . 'staticvariables` WHERE `id_variable` = '. $id;

        return Db::getInstance()->executeS($sql);
    }
    public static function deleteVariable($id)
    {

        $sql = 'DELETE FROM `' . _DB_PREFIX_ . 'staticvariables` WHERE `id_variable` = '.$id;

        return Db::getInstance()->execute($sql);
    }
    public static function createVariable($values)
    {
        $sql =  "INSERT INTO ". _DB_PREFIX_ ."staticvariables 
      (`id_variable`, `name`, `value`) 
      VALUES (NULL, '".$values['name']."', '".$values['value']."')";
        $result = Db::getInstance()->execute($sql);
        return $result;

    }
    public static function updateVariable($values)
    {
        $sql = "UPDATE ". _DB_PREFIX_ ."staticvariables SET name='".$values['name']."', value='".$values['value']."' WHERE id_variable=".$values['id_variable'];
        $result = Db::getInstance()->execute($sql);
        return $result;

    }

    public function uninstall()
    {
        /* Deletes Module */
        if (parent::uninstall()) {
            /* Deletes tables */
            $res = $this->deleteTables();
            Db::getInstance()->execute("DELETE FROM `ps_module` WHERE `name` = 'staticvariables'");


            return (bool)$res;
        }

        return false;
    }

    /**
     * Load the configuration form
     */
    public function getContent()
    {


        $this->context->smarty->assign(
            array('link' => $this->context->link,
                'variables' =>  $this->getVariables()
            )
        );

        $form = $this->renderNewVariableForm();
        /**
         * If values have been submitted in the form, process.
         */
        if (((bool)Tools::getValue('id_slide'))) {
            $id_slide = (int)Tools::getValue('id_slide');
            $form = $this->renderEditVariableForm($id_slide);
        }

        if (((bool)Tools::getValue('delete_id_slide'))) {

            $values = $this->deleteVariable(Tools::getValue('delete_id_slide'));
            $this->context->smarty->assign(
                array('link' => $this->context->link,
                    'variables' =>  $this->getVariables()
                )
            );
        }
        if (((bool)Tools::isSubmit('editVariableShop')) == true || ((bool)Tools::isSubmit('submitVariableShop')) == true) {
            $this->postVariableProcess();
        }

        $this->context->smarty->assign('module_dir', $this->_path);

        $output = $this->context->smarty->fetch($this->local_path.'views/templates/admin/configure.tpl');

        return $output . $form;
    }

    /**
     * Create the form that will be displayed in the configuration of your module.
     */
    protected function renderNewVariableForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitVariableShop';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

            $helper->tpl_vars = array(
                'fields_value' => $this->getVariableInfo(),
                'languages' => $this->context->controller->getLanguages(),
                'id_language' => $this->context->language->id,
            );


        return $helper->generateForm(array($this->getVariableForm()));
    }
    protected function renderEditVariableForm($id)
    {

        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'editVariableShop';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
            $helper->tpl_vars = array(
                'fields_value' => $this->getVariableFormValues($id),
                'languages' => $this->context->controller->getLanguages(),
                'id_language' => $this->context->language->id,
            );



        return $helper->generateForm(array($this->getVariableForm()));
    }

    protected function getVariableFormValues($id)
    {
        $values = $this->getVariable($id)[0];

        return array(
            'variable_id' => $id,
            'variable_name' =>  $values["name"],
            'variable_value' =>  $values["value"],
        );
    }

    public function getVariableInfo()
    {
        return array(
            'variable_id' => '',
            'variable_name' => '',
            'variable_value' =>  '',
        );
    }


    /**
     * Create the structure of shop form.
     */
    protected function getVariableForm()
    {
        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Add New Variable'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'hidden',
                        'label' => $this->l('Variable ID'),
                        'name' => 'variable_id',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Variable Name'),
                        'name' => 'variable_name',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Variable Value'),
                        'name' => 'variable_value',
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );
    }

    /**
     * Save form data.
     */
    protected function postVariableProcess()
    {
        if(Tools::getValue('variable_id') == '') {
            $variable = array(
              'name' =>   Tools::getValue('variable_name'),
              'value' =>   Tools::getValue('variable_value'),
            );

            $this->createVariable($variable);

        } else {
            $variable = array(
                'id_variable' => (int)Tools::getValue('variable_id'),
                'name' =>   Tools::getValue('variable_name'),
                'value' =>   Tools::getValue('variable_value'),
            );

            $this->updateVariable($variable);

        }

        $this->context->smarty->assign(
            array('link' => $this->context->link,
                'variables' =>  $this->getVariables()
            )
        );
    }


    /**
    * Add the CSS & JavaScript files you want to be loaded in the BO.
    */
    public function hookBackOfficeHeader()
    {
        if (Tools::getValue('module_name') == $this->name) {
            $this->context->controller->addJS($this->_path.'views/js/back.js');
            $this->context->controller->addCSS($this->_path.'views/css/back.css');
        }
    }

    /**
     * Add the CSS & JavaScript files you want to be added on the FO.
     */
    public function hookHeader()
    {
        $this->context->controller->addJS($this->_path.'/views/js/front.js');
        $this->context->controller->addCSS($this->_path.'/views/css/front.css');
    }


}
