<?php

class OrderOpcController extends OrderOpcControllerCore
{
	protected function _getPaymentMethods()
	{
		//OVERRIDE	
		$extracarrier_errors = false;
		
		if (!$this->isLogged)
			return '<p class="warning">'.Tools::displayError('Please sign in to see payment methods.').'</p>';
		if ($this->context->cart->OrderExists())
			return '<p class="warning">'.Tools::displayError('Error: This order has already been validated.').'</p>';
		if (!$this->context->cart->id_customer || !Customer::customerIdExistsStatic($this->context->cart->id_customer) || Customer::isBanned($this->context->cart->id_customer))
			return '<p class="warning">'.Tools::displayError('Error: No customer.').'</p>';
		$address_delivery = new Address($this->context->cart->id_address_delivery);
		$address_invoice = ($this->context->cart->id_address_delivery == $this->context->cart->id_address_invoice ? $address_delivery : new Address($this->context->cart->id_address_invoice));
		if (!$this->context->cart->id_address_delivery || !$this->context->cart->id_address_invoice || !Validate::isLoadedObject($address_delivery) || !Validate::isLoadedObject($address_invoice) || $address_invoice->deleted || $address_delivery->deleted)
			return '<p class="warning">'.Tools::displayError('Error: Please select an address.').'</p>';
		if (count($this->context->cart->getDeliveryOptionList()) == 0 && !$this->context->cart->isVirtualCart())
		{
			if ($this->context->cart->isMultiAddressDelivery())
				return '<p class="warning">'.Tools::displayError('Error: None of your chosen carriers deliver to some of  the addresses you\'ve selected.').'</p>';
			else
				return '<p class="warning">'.Tools::displayError('Error: None of your chosen carriers deliver to the address you\'ve selected.').'</p>';
		}

		//OVERRIDE
		if (!$this->context->cart->getDeliveryOption(null, false) && !$this->context->cart->isVirtualCart())
			return '<p class="warning">'.Tools::displayError('Error: Please choose a carrier.').'</p>';
		$extracarrier_errors = Hook::exec('validateCarriers', array(
			'cart' => $this->context->cart
		));
		if($extracarrier_errors)
			return $extracarrier_errors;

		if (!$this->context->cart->id_currency)
			return '<p class="warning">'.Tools::displayError('Error: No currency has been selected.').'</p>';
		if (!$this->context->cookie->checkedTOS && Configuration::get('PS_CONDITIONS'))
			return '<p class="warning">'.Tools::displayError('Please accept the Terms of Service.').'</p>';
		
		/* If some products have disappear */
		if (!$this->context->cart->checkQuantities())
			return '<p class="warning">'.Tools::displayError('An item in your cart is no longer available. You cannot proceed with your order.').'</p>';

		/* Check minimal amount */
		$currency = Currency::getCurrency((int)$this->context->cart->id_currency);

		$minimalPurchase = Tools::convertPrice((float)Configuration::get('PS_PURCHASE_MINIMUM'), $currency);
		if ($this->context->cart->getOrderTotal(false, Cart::ONLY_PRODUCTS) < $minimalPurchase)
			return '<p class="warning">'.sprintf(
				Tools::displayError('A minimum purchase total of %s is required in order to validate your order.'),
				Tools::displayPrice($minimalPurchase, $currency)
			).'</p>';

		/* Bypass payment step if total is 0 */
		if ($this->context->cart->getOrderTotal() <= 0)
			return '<p class="center"><input type="button" class="exclusive_large" name="confirmOrder" id="confirmOrder" value="'.Tools::displayError('I confirm my order.').'" onclick="confirmFreeOrder();" /></p>';

		$return = Hook::exec('displayPayment');
		if (!$return)
			return '<p class="warning">'.Tools::displayError('No payment method is available for use at this time. ').'</p>';
		return $return;
	}
}