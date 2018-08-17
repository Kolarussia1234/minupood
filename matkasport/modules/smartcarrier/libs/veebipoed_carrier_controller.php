<?php
class VeebipoedCarrierController extends ModuleAdminController
{
	public function processFilter()
	{
		$this->identifier = 'name';
		parent::processFilter();
		$this->identifier = 'id_'.$this->table;
	}

	public function getPositions()
	{
		return array(
			array('id' => 0, 'name' => $this->l('After carrier')),
			array('id' => 1, 'name' => $this->l('Inside carrier box (with hook)')),
			array('id' => 2, 'name' => $this->l('Inside carrier box (using js)'))
		);
	}

	public function getTypes()
	{
		$name = $this->module->name;
		return array(
			array('id' => $name::LIST_TYPE_SHORT, 'name' => $this->l('Provinces and postoffices in different selectboxes')),
			array('id' => $name::LIST_TYPE_LONG, 'name' => $this->l('Postoffices in one selectbox sorted by provinces')),
		);
	}	

	public function renderForm()
	{
		$currency = Currency::getDefaultCurrency();
		$customer_groups = Group::getGroups($this->context->language->id);
		array_unshift($customer_groups, array('id_group' => 0, 'name' => $this->l('All')));

		$this->fields_form = array(
			'legend' => array(
				'title' => $this->l('Create new size'),
				'image' => '../img/admin/return.gif'
			),
			'input' => array(
				array(
					'type' => 'hidden',
					'name' => key($this->fields_list)
				),
				array(
					'type' => 'text',
					'name' => 'name',
					'lang' => false,
					'label' => $this->l('Name:'),
					'required' => true
				),
				array(
					'type' => 'text',
					'label' => $this->l('Height:'),
					'name' => 'height',
					'required' => true,
					'lang' => false,
					'suffix' => 'cm'
				),
				array(
					'type' => 'text',
					'label' => $this->l('Width:'),
					'name' => 'width',
					'required' => true,
					'lang' => false,
					'suffix' => 'cm'  
				),
				array(
					'type' => 'text',
					'label' => $this->l('Depth:'),
					'name' => 'depth',
					'required' => true,
					'lang' => false,
					'suffix' => 'cm'
				),
				array(
					'type' => 'select',
					'label' => $this->l('Gustomer group:'),
					'name' => 'id_group',
					'required' => true,
					'lang' => false,
					'options' => array(
						'query' => $customer_groups,
						'id' => 'id_group',
						'name' => 'name'
					)
				),
				array(
					'type' => 'text',
					'label' => $this->l('Price from:'),
					'name' => 'price_from',
					'desc' => $this->l('Price range starting point is included'),
					'required' => true,
					'lang' => false,
					'suffix' => $currency->sign
				),
				array(
					'type' => 'text',
					'label' => $this->l('Price to:'),
					'name' => 'price_to',
					'desc' => $this->l('Price range end point is excluded'),
					'required' => true,
					'lang' => false,
					'suffix' => $currency->sign
				),
				array(
					'type' => 'text',
					'label' => $this->l('Price:'),
					'name' => 'price',
					'desc' => $this->l('Price is in shop default currency and without tax.'),
					'required' => true,
					'lang' => false,
					'suffix' => $currency->sign
				)
			),
			'submit' => array(
				'title' => $this->l('Save')	
			)
		);
		
					
        if (!($obj = $this->loadObject(true))) {
			return;
        }

		return parent::renderForm();
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
			),
			$this->module->prefixed('list_type') => array(
				'title' => $this->l('List Display:'), 
				'cast' => 'intval',
				'type' => 'select',
				'list' => $this->getTypes(),
				'identifier' => 'id'
			),
			$this->module->prefixed('show_address') => array(
				'title' => $this->l('Display address:'), 
				'desc' => $this->l('Display address after postoffice name.'),
				'cast' => 'intval',
				'type' => 'bool',
			),
			$this->module->prefixed('hide_address_fields') => array(
				'title' => $this->l('Hide address fields:'), 
				'desc' => $this->l('Hide address fields, when veebipoed carrier is selected.'),
				'cast' => 'intval',
				'type' => 'bool',
			)
		);
	}

	public function postProcess()
	{
		$objectClass = $this->className;
		if(Tools::getIsset($this->module->prefixed('position'))) {
			$this->module->newPosition(Tools::getValue($this->module->prefixed('position')));
		}

		if(Tools::isSubmit('submitAdd' . $this->table)) {
			$carrier = new Carrier($this->module->getCarrierId());
            if ($carrier->max_width < Tools::getValue('width')) {
				$this->errors[] = $this->l('Terminal width cant be greater than module carrier width');
            }
            if ($carrier->max_height < Tools::getValue('height')) {
				$this->errors[] = $this->l('Terminal height cant be greater than module carrier height');
            }
            if ($carrier->max_depth < Tools::getValue('depth')) {
				$this->errors[] = $this->l('Terminal depth cant be greater than module carrier depth');
		}
        }

        if ((Tools::isSubmit('submitDel' . $this->table) ||
			isset($_GET['delete'.$this->table])) &&
			count($objectClass::getSizes()) <= 1)
		{
			$this->errors[] = $this->l('Cant delete last terminal');
			return false;
		}
		parent::postProcess();
	}
}
