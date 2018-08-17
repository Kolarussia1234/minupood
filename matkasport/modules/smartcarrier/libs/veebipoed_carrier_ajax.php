<?php
class VeebipoedAjaxController extends ModuleFrontController
{
	public function initContent()
	{
		$id_address = Tools::getValue('id_address', 0);
		$name = Tools::getValue('name');

        if (Tools::getIsset('terminal_id')) {
			$terminal_id = Tools::getValue('terminal_id', 0);
			$context = Context::getContext();
			$data = Tools::unSerialize($context->cookie->{$name . '_' . $id_address});
            if ($data === false) {
				$data = array();
            }
			$old_terminal = (isset($data['terminal_id']) ? $data['terminal_id'] : 0);
			$data['terminal_id'] = $terminal_id;
			$context->cookie->{$name . '_' . $id_address} = serialize($data);
			die(Tools::jsonEncode(
				array('old_terminal_id' => $old_terminal)
			));
        } elseif (Tools::getIsset('group_id')) {
			$group_id = Tools::getValue('group_id', 0);
			$context = Context::getContext();
			$data = Tools::unSerialize($context->cookie->{$name . '_' . $id_address});
			if($data === false)
				$data = array();
			$data['terminal_id'] = 0;
			$data['group_id'] = $group_id;
			$context->cookie->{$name . '_' . $id_address} = serialize($data);

            if ($this->module->isFiveStepsInsideCarrier() || $this->module->isInsideHook()) {
				$terminals = $this->module->getTerminals(array(
					array('active', '=', 1),
					array('group_id', '=', (int)$group_id)
				));
                if ($terminals) {
					$result = array(
						'success' => true,
						'is_address' => $this->module->isDisplayAddress(),
						'terminals' => $terminals
					);
                } else {
					$result = array('success' => false);
				}
				die(Tools::jsonEncode($result));
            } else {
				die();
			}	
		}
	}
}