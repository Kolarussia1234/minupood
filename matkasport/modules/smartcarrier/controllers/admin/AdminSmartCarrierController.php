<?php

if (!class_exists('VeebipoedCarrierController')) {
	include(_PS_MODULE_DIR_ .'smartcarrier/libs/veebipoed_carrier_controller.php');
}

class AdminSmartcarrierController extends VeebipoedCarrierController
{	
	public function __construct()
	{
		$this->bootstrap = true;	
		$this->context = Context::getContext();
	 	$this->table = 'smartcarrier_size';
	 	$this->className = 'SmartCarrierSize';
		$this->colorOnBackground = true;
		$this->_where = 'AND `deleted`=0';
		
		$this->addRowAction('edit');
		$this->addRowAction('delete');
		
		$this->fields_list = array(
			'id_smartcarrier_size' => array(
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

		$this->_select = 'COALESCE(gl.`name`, "'.pSQL(Context::getContext()->getTranslator()->trans('All')).'") AS `group_name`';

		$this->_join = 'LEFT JOIN `'._DB_PREFIX_.'group_lang` gl ON (a.`id_group`=gl.`id_group`) AND '.
		'gl.`id_lang`='.$this->context->cookie->id_lang;

		$customer_groups = Group::getGroups($this->context->cookie->id_lang);

		$this->fields_options = array(
			'general' => array(
				'title' =>	Context::getContext()->getTranslator()->trans('SmartCarrier sizes'),
				'image' => '../img/t/AdminCarriers.gif',
				'fields' =>	$this->getCarrierOptions(),
				'submit' => array(
					'title' => Context::getContext()->getTranslator()->trans('Save')	
				)
			),
			
		);
	}

	public function getCarrierOptions()
	{
		$currency = Currency::getDefaultCurrency();
		return array(
			$this->module->prefixed('position') => array(
				'title' => $this->l('Carrier position:'), 
				'desc' => $this->l('Your shop theme must support insideCarrier hook. It is not supported by default.'),
				'cast' => 'intval',
				'type' => 'select',
				'list' => $this->getPositions(),
				'identifier' => 'id'
			),
			$this->module->prefixed('default_price') => array(
				'title' => $this->l('Default price:'), 
				'cast' => 'intval',
				'type' => 'text',
				'desc' => $this->l('Default price if no matching terminal found'),
				'suffix' => $currency->sign
			)
		);
	}
}