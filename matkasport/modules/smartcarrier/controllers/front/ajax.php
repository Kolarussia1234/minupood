<?php

class smartcarrierajaxModuleFrontController extends ModuleFrontController
{
	public function initContent()
	{
		parent::initContent();
		$id_address = Tools::getValue('id_address', 0);
		$name = Tools::getValue('name');
		$terminal_id = Tools::getValue('terminal_id', 0);
		$context = Context::getContext();
		$data = Tools::unSerialize($context->cookie->{$name . '_' . $id_address});
		if($data === false)
			$data = array();
		$old_terminal = (isset($data['terminal_id']) ? $data['terminal_id'] : 0);
		$data['terminal_id'] = $terminal_id;
		$context->cookie->{$name . '_' . $id_address} = serialize($data);
		die(Tools::jsonEncode(
			array('old_terminal_id' => $old_terminal)
		));
	}
}