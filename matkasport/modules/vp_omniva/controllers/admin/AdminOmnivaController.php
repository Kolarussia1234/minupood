<?php

if(!class_exists('VeebipoedCarrierController')) {
	include( _PS_MODULE_DIR_ .'vp_omniva/libs/veebipoed_carrier_controller.php');
}

class AdminOmnivaController extends VeebipoedCarrierController
{	
	public function __construct()
	{
		$this->bootstrap = true;	
		$this->context = Context::getContext();
	 	$this->table = 'vp_omniva_size';
	 	$this->className = 'OmnivaSize';
		$this->colorOnBackground = true;
		$this->_where = 'AND `deleted`=0';
		
		$this->addRowAction('edit');
		$this->addRowAction('delete');
		
		$this->fields_list = array(
			'id_omniva_size' => array(
				'title' => Context::getContext()->getTranslator()->trans('ID'),
				'align' => 'center',
				'width' => 'auto',
				'class' => 'fixed-width-sm'
			),
			'name' => array(
				'title' => Context::getContext()->getTranslator()->trans('Name'),
				'width' => 'auto',
				'align' => 'center',
				'class' => 'fixed-width-sm'
			),
			'height' => array(
				'title' => Context::getContext()->getTranslator()->trans('Height'),
				'width' => 'auto',
				'align' => 'left',
				'class' => 'fixed-width-sm'
			),
			'width' => array(
				'title' => Context::getContext()->getTranslator()->trans('Width'),
				'width' => 'auto',
				'align' => 'right',
				'class' => 'fixed-width-sm'
			),
			'depth' => array(
				'title' => Context::getContext()->getTranslator()->trans('Depth'),
				'width' => 'auto',
				'align' => 'right',
				'class' => 'fixed-width-sm'
			),
			'group_name' => array(
				'title' => Context::getContext()->getTranslator()->trans('Customer group'),
				'width' => 'auto',
				'align' => 'right',
				'class' => 'fixed-width-sm'
			),
			'price_from' => array(
				'title' => Context::getContext()->getTranslator()->trans('Price from'),
				'width' => 'auto', 
				'align' => 'right',
				'type' => 'price',
				'class' => 'fixed-width-sm'
			),
			'price_to' => array(
				'title' => Context::getContext()->getTranslator()->trans('Price to'),
				'width' => 'auto', 
				'align' => 'right',
				'type' => 'price',
				'class' => 'fixed-width-sm'
			),
			'price' => array(
				'title' => Context::getContext()->getTranslator()->trans('Price'),
				'width' => 'auto', 
				'align' => 'right',
				'type' => 'price',
				'class' => 'fixed-width-sm'
			)
 		);

		parent::__construct();

		$this->_select = 'COALESCE(gl.`name`, "'.pSQL($this->l('All')).'") AS `group_name`';

		$this->_join = 'LEFT JOIN `'._DB_PREFIX_.'group_lang` gl ON (a.`id_group`=gl.`id_group`) AND '.
		'gl.`id_lang`='.$this->context->cookie->id_lang;

		$customer_groups = Group::getGroups($this->context->cookie->id_lang);
		$cron_url = Tools::getHttpHost(true, true) . __PS_BASE_URI__ . 'modules/'.$this->module->name.'/cron.php?token='.substr(_COOKIE_KEY_, 34, 8);
		$this->fields_options = array(
			'general' => array(
				'title' =>	$this->l('Omniva sizes'),
				'image' => '../img/t/AdminCarriers.gif',
				'fields' =>	$this->getCarrierOptions(),
				'info' => '<p><a href="../modules/'.$this->module->name.'/cron.php?token=' . substr(_COOKIE_KEY_, 34, 8) .
					'&redirect=1" class="button">' . $this->l('Update omniva postoffices list') . '</a></p><p>' .
					$this->l('You can set a cron job by using the following URL:') .
					' <a href="' . $cron_url . '">' . $cron_url . '</a></p>',
				'submit' => array(
					'title' => $this->l('Save')	
				)
			),
			
		);
	}
}

?>
