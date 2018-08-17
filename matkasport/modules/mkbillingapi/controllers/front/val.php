<?php

class mkbillingapivalModuleFrontController extends ModuleFrontController
{
	const STATE_COMPLETE = 'COMPLETED';
	const STATE_APPROVED = 'APPROVED';
	const STATE_CANCELLED = 'CANCELLED';
	const STATE_EXPIRED = 'EXPIRED';

	const MSG_TOKEN_RTN = 'token_return';

	public $ssl = true;

	private $json_data;

	public function initContent()
	{
		$this->json_data = Tools::jsonDecode(Tools::getValue('json'));
		
		if (isset($this->json_data->message_type) && $this->json_data->message_type == self::MSG_TOKEN_RTN)
		{
			$api = $this->module->getApi();
			if (is_null($api))
			{
				$this->context->smarty->assign(array(
					'banklink_msg' => $this->module->l('Invalid maksekeskus configuration', 'val'),
					'msg_class' => 'info'
				));
                $this->setTemplate('module:mkbillingapi/views/templates/front/final.tpl');
			}
			else
			{
				$transaction = $api->getTransaction($this->json_data->transaction->id);
				if (!is_null($transaction))
				{
					$order = new Order((int)$transaction->reference);
					if (Validate::isLoadedObject($order))
					{
						if ($order->hasBeenPaid())
						{
							Tools::redirectLink($this->module->getOrderConfUrl($order));
						}

						$payment = $api->createPayment($transaction->id, array(
							'token' => $this->json_data->token->id,
							'amount' => $transaction->amount,
							'currency' => $transaction->currency
						));

						if (!is_null($payment) && (
							$payment->transaction->status == self::STATE_COMPLETE ||
							$payment->transaction->status == self::STATE_APPROVED
						)) {
							$order->valid = true;
							$order->setCurrentState(Configuration::get('PS_OS_PAYMENT'));
							Tools::redirectLink($this->module->getOrderConfUrl($order));
						}
					}
				}
			}
		}
		elseif ($this->verifySignature())
		{
			$order = new Order((int)$this->json_data->reference);
			if (Validate::isLoadedObject($order))
			{
				if ($order->hasBeenPaid())
				{
					Tools::redirectLink($this->module->getOrderConfUrl($order));
				}
				elseif ($this->json_data->status == self::STATE_COMPLETE)
				{
					$order->valid = true;
					$order->setCurrentState(Configuration::get('PS_OS_PAYMENT'));
					Tools::redirectLink($this->module->getOrderConfUrl($order));
				}
				elseif (
					$this->json_data->status == self::STATE_CANCELLED ||
					$this->json_data->status == self::STATE_EXPIRED
				) {
					$order->setCurrentState(Configuration::get('PS_OS_CANCELED'));
					$this->context->smarty->assign(array(
						'banklink_msg' => $this->module->l('Order canceled', 'val'),
						'msg_class' => 'info'
					));
                    $this->setTemplate('module:mkbillingapi/views/templates/front/final.tpl');
				}
				else
				{
					Tools::redirect($this->context->link->getPageLink('order-opc.php', true));
				}
			}
		}
		else
		{
			$this->context->smarty->assign(array(
				'msg_class' => 'info',
				'banklink_msg' => $this->module->l('Invalid signature', 'val')
			));
			$this->setTemplate('final.tpl');
		}
	}

	private function verifySignature()
	{
		if (empty($this->json_data))
		{
			return false;
		}

		$api_key = $this->module->getConfig('secret_key');

		$signature = strtoupper(
			hash('sha512',
				(string)$this->json_data->amount.
				(string)$this->json_data->currency.
				(string)$this->json_data->reference.
				(string)$this->json_data->transaction.
				(string)$this->json_data->status.
				(string)$api_key
			)
		);
	
		return ($this->json_data->signature == $signature);
	}

}