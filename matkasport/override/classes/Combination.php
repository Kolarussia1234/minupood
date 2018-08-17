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

/**
 * Class Combination
 */
class Combination extends CombinationCore
{


    public static function getImageByIdProductAttributeANDIdAttribute($id_attribute, $idProduct)
    {
        return Db::getInstance()->getValue('
            SELECT ps_product_attribute_image.id_image 
            FROM ps_product_attribute_image
            JOIN ps_product_attribute ON ps_product_attribute.id_product_attribute = ps_product_attribute_image.id_product_attribute
            JOIN ps_product_attribute_combination ON ps_product_attribute.id_product_attribute = ps_product_attribute_combination.id_product_attribute
            WHERE ps_product_attribute.id_product = '.$idProduct.' 
            AND ps_product_attribute_combination.id_attribute = '.$id_attribute
        );
    }


}

