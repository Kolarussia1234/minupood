<?php
/**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

class CustomerFormatter extends CustomerFormatterCore
{
	public function getFormat()
    {
    	$format = parent::getFormat();
    	$context = Context::getContext();

    	// Add ID code after lastname
    	$place_lastname = array_search('lastname', array_keys($format));
    	$first_slice = array_slice($format, 0, $place_lastname + 1);
    	$second_slice = array_slice($format, $place_lastname + 1);
        $id_code = ($context->customer->id_code ? $context->customer->id_code : '');

    	if($context->controller->php_self == 'identity') {
	    	
	    	$first_slice['vp_id_code'] = (new FormField)
	            ->setName('vp_id_code')
	            ->setType('text')
	            ->setValue($id_code)
	        ;

	        $constraints = Customer::$definition['fields'];
	        if (!empty($constraints['id_code']['validate'])) {
                $first_slice['vp_id_code']->addConstraint(
                    $constraints['id_code']['validate']
                );
            }
	    }


	    return array_merge($first_slice, $second_slice);
    }
}