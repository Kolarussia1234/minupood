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

class MinuMoodul extends Module
{
    protected $config_form = false;

    public function __construct()
    {
        $this->name = 'MinuMoodul';
        $this->tab = 'checkout';
        $this->version = '1.0.0';
        $this->author = 'Nick Ovt';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);

        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('TextModuleNick');
        $this->description = $this->l('Here is my new great module for Prestashop! See on minu moodul. VP_');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall my module?');

        if (!Configuration::get('MYMODULE_NAME'))
      $this->warning = $this->l('No name provided');

        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    }

    /**
     * Don't forget to create update methods if needed:
     * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
     */
    public function install()
    {
        Configuration::updateValue('MINUMOODUL_LIVE_MODE', true);

    	if (Shop::isFeatureActive())
{
  Shop::setContext(Shop::CONTEXT_ALL);
}

        return parent::install() &&
        	$this->registerHook('displayProductAdditionalInfo')&&
        	$this->registerHook('displayProductListReviews')&&
        	$this->registerHook('leftColumn')&&
        	$this->registerHook('rightColumn')&&
            $this->registerHook('header') &&
            $this->registerHook('backOfficeHeader') &&
            $this->registerHook('displayRightColumnProduct')&&
            $this->registerHook('displayOrderDetail');
    }

    public function uninstall()
    {
        Configuration::deleteByName('MINUMOODUL_LIVE_MODE');

        return parent::uninstall();
    }

    /**
     * Load the configuration form
     */
    public function getContent()
    {

    	//$output = null;
 
   // if (Tools::isSubmit('submit'.$this->name))
    //{
     //   $my_module_name = strval(Tools::getValue('MYMODULE_NAME'));
      //  if (!$my_module_name
       //   || empty($my_module_name)
        //  || !Validate::isGenericName($my_module_name))
         //   $output .= $this->displayError($this->l('Invalid Configuration value'));
        //else
        //{
         //   Configuration::updateValue('MYMODULE_NAME', $my_module_name);
         //   $output .= $this->displayConfirmation($this->l('Settings updated'));
       // }
    //}
    //return $output.$this->displayForm();
    //return $this->postProcess();
//}

        /**
         * If values have been submitted in the form, process.
         */
        $output1 = null;

        if (((bool)Tools::isSubmit('submitMinuMoodulModule')) == true) {
        	$my_module_name = strval(Tools::getValue('MYMODULE_NAME'));
        if (!$my_module_name
          || empty($my_module_name)
          || !Validate::isGenericName($my_module_name))
            $output1 .= $this->displayError($this->l('Invalid Configuration value'));
        else
        {
            Configuration::updateValue('MYMODULE_NAME', $my_module_name);
            $output1 .= $this->displayConfirmation($this->l('Settings updated'));
        }

            $this->postProcess();
        }

        $this->context->smarty->assign('module_dir', $this->_path);

        $output = $this->context->smarty->fetch($this->local_path.'views/templates/admin/configure.tpl');

        return $output.$output1.$this->renderForm();
    }




/*public function displayForm()
{
    // Get default language
    $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');
 
    // Init Fields form array
    $fields_form[0]['form'] = array(
        'legend' => array(
            'title' => $this->l('Settings'),
        ),
        'input' => array(
            array(
                'type' => 'text',
                'label' => $this->l('Configuration value'),
                'name' => 'MYMODULE_NAME',
                'size' => 20,
                'required' => true
            ),
        	array(
        		'type' => 'text',
        		'label' => $this->l('Enter text'),
        		'name' => 'MYMODULE_NAME',
        		'size' => 20,
        		'required' => true
        	)
        ),
        'submit' => array(
            'title' => $this->l('Save'),
            'class' => 'btn btn-default pull-right'
        )
    );
 
    $helper = new HelperForm();
 
    // Module, token and currentIndex
    $helper->module = $this;
    $helper->name_controller = $this->name;
    $helper->token = Tools::getAdminTokenLite('AdminModules');
    $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
 
    // Language
    $helper->default_form_language = $default_lang;
    $helper->allow_employee_form_lang = $default_lang;
 
    // Title and toolbar
    $helper->title = $this->displayName;
    $helper->show_toolbar = true;        // false -> remove toolbar
    $helper->toolbar_scroll = true;      // yes - > Toolbar is always visible on the top of the screen.
    $helper->submit_action = 'submit'.$this->name;
    $helper->toolbar_btn = array(
        'save' =>
        array(
            'desc' => $this->l('Save'),
            'href' => AdminController::$currentIndex.'&configure='.$this->name.'&save'.$this->name.
            '&token='.Tools::getAdminTokenLite('AdminModules'),
        ),
        'back' => array(
            'href' => AdminController::$currentIndex.'&token='.Tools::getAdminTokenLite('AdminModules'),
            'desc' => $this->l('Back to list')
        )
    );
 
    // Load current value
    $helper->fields_value['MYMODULE_NAME'] = Configuration::get('MYMODULE_NAME');
 
   // return $helper->generateForm($fields_form);
    return $helper->generateForm(array($this->getConfigForm()));
} */


    /**
     * Create the form that will be displayed in the configuration of your module.
     */
   protected function renderForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar = true;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 1);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitMinuMoodulModule';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', true)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(), /* Add values for your inputs */
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($this->getConfigForm()));
    }

    /**
     * Create the structure of your form.
     */
    protected function getConfigForm()
    {
        return array(
            'form' => array(
                'legend' => array(
                'title' => $this->l('Settings'),
                'icon' => 'icon-cogs',
                ),
                'input' => array(
                	array(
                		'type' => 'text',
                		'label' => $this->l('Name your module'),
                		'name' => 'MYMODULE_NAME'
                	),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Live mode'),
                        'name' => 'MINUMOODUL_LIVE_MODE',
                        'is_bool' => true,
                        'desc' => $this->l('Use this module in live mode'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'col' => 3,
                        'type' => 'text',
                        'prefix' => '<i class="icon icon-envelope"></i>',
                        'desc' => $this->l('Enter a valid email address'),
                        'name' => 'MINUMOODUL_ACCOUNT_EMAIL',
                        'label' => $this->l('Email'),
                    ),
                    array(
                        'type' => 'password',
                        'name' => 'MINUMOODUL_ACCOUNT_PASSWORD',
                        'label' => $this->l('Password'),
                    ),
                    array(
                    	'col' => 3,
                    	'type' => 'text',
                    	'desc' => $this->l('Enter text displayed on the Product Description'),
                    	'name' => 'MINUMOODUL_PRODUCT_TEXT',
                    	'label' => $this->l('Product description'),
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );
    }

    /**
     * Set values for the inputs.
     */
    protected function getConfigFormValues()
    {
        return array(
        	'MYMODULE_NAME' => Configuration::get('MYMODULE_NAME'),
            'MINUMOODUL_LIVE_MODE' => Configuration::get('MINUMOODUL_LIVE_MODE', true),
            'MINUMOODUL_ACCOUNT_EMAIL' => Configuration::get('MINUMOODUL_ACCOUNT_EMAIL', 'contact@prestashop.com'),
            'MINUMOODUL_ACCOUNT_PASSWORD' => Configuration::get('MINUMOODUL_ACCOUNT_PASSWORD', '123'),
            'MINUMOODUL_PRODUCT_TEXT' => Configuration::get('MINUMOODUL_PRODUCT_TEXT')
        );
    }

    /**
     * Save form data.
     */
    protected function postProcess()
    {
        $form_values = $this->getConfigFormValues();

        foreach (array_keys($form_values) as $key) {
            Configuration::updateValue($key, Tools::getValue($key));
        }

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

    public function hookDisplayLeftColumn($params)
{
  $this->context->smarty->assign(
      array(
          'my_module_name' => Configuration::get('MYMODULE_NAME'),
          'my_module_link' => $this->context->link->getModuleLink($this->name, 'display'),
          'my_module_message' => $this->l('This is a simple text message') // Do not forget to enclose your strings in the l() translation method
      )
  );
  return $this->display(__FILE__, 'views/templates/hook/mymodule.tpl');
} 
 
public function hookDisplayRightColumn($params)
{

	//$this->context->smarty->assign(
     // array(
      //    'my_module_name' => Configuration::get('MYMODULE_NAME'),
       //   'my_module_link' => $this->context->link->getModuleLink('MinuMoodul', 'display')
      //)
  //);
  //return $this->display(__FILE__, 'views/templates/hook/mymodule.tpl');

  return $this->hookDisplayLeftColumn($params);
}
 
public function hookDisplayHeader()
{
	//$this->context->controller->addJS($this->_path.'/views/js/alert.js');
    $this->context->controller->addCSS($this->_path.'views/css/mymodule.css', 'all');
}


    /*public function hookActionObjectImageAddAfter(array $params)
    *{
    *	$this->context->controller->addJS($this->_path.'/views/js/alert.js');
    *    /* Place your code here. */
    //}

   // public function hookActionOrderDetail(array $params)
    //{
    //    /* Place your code here. */
    //    return $this->display(__FILE__, 'views/templates/hook/mymodule.tpl');
        //$this->context->controller->addJS($this->_path.'/views/js/alert.js');
        //$this->context->controller->addCSS($this->_path.'views/css/mymodule.css', 'all');
    //}


    /*public function hookDisplayProductListReviews($params){
    	//$this->context->controller->addCSS($this->_path.'views/css/mymodule.css', 'all');
        $this->context->smarty->assign(
          array(
              'my_module_name' => Configuration::get('MYMODULE_NAME'),
              'my_module_link' => $this->context->link->getModuleLink($this->name, 'display'),
              'my_module_message' => $this->l('This is a simple text message') // Do not forget to enclose your strings in the l() translation method
          )
      );

    	$this->display(__FILE__, 'views/templates/hook/mymodule.tpl');
    } */

    public function hookDisplayProductAdditionalInfo($params){
            $this->context->smarty->assign(
                  array(
                      'my_module_name' => Configuration::get('MYMODULE_NAME'),
                      'my_module_link' => $this->context->link->getModuleLink($this->name, 'display'),
                      'my_module_message' => $this->l('This is a simple text message') // Do not forget to enclose your strings in the l() translation method
                  )
              );

        //$this->context->controller->addCSS($this->_path.'views/css/mymodule.css', 'all');
       return $this->display(__FILE__, 'views/templates/hook/mymodule.tpl');
        //$this->context->controller->display(__FILE__, 'views/templates/hook/mymodule.tpl');
    }

   /* public function hookDisplayOrderDetail($params){
            $this->context->smarty->assign(
                array(
                    'my_module_name' => Configuration::get('MYMODULE_NAME'),
                    'my_module_link' => $this->context->link->getModuleLink($this->name, 'display'),
                    'my_module_message' => $this->l('This is a simple text message') // Do not forget to enclose your strings in the l() translation method
                )
            );

        return $this->display(__FILE__, 'views/templates/hook/mymodule.tpl');


       // array(
    //    'order' => $this->display(__FILE__, 'views/templates/hook/mymodule.tpl')

      //  );
    } */

   /* public function hookDisplayRightColumnProduct($params){
        $this->context->smarty->assign(
      array(
          'my_module_name' => Configuration::get('MYMODULE_NAME'),
          'my_module_link' => $this->context->link->getModuleLink($this->name, 'display'),
          'my_module_message' => $this->l('This is a simple text message') // Do not forget to enclose your strings in the l() translation method
      )
  );

        return $this->display(__FILE__, 'views/templates/hook/mymodule.tpl');
    } */
}