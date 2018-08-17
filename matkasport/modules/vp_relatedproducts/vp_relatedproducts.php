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

class Vp_relatedproducts extends Module
{
    protected $config_form = false;

    public function __construct()
    {
        $this->name = 'vp_relatedproducts';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Veebipoed.ee';
        $this->need_instance = 0;

        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Related Products');
        $this->description = $this->l('Show related products on an unactive product page');

        $this->confirmUninstall = $this->l('Are you sure you want to delete all the information regarding related products?');

        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    }

    /**
     * Don't forget to create update methods if needed:
     * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
     */
    public function install()
    {
        return parent::install() && $this->registerHook(array('header','displayNotFound'));
    }

    public function uninstall()
    {

        return parent::uninstall();
    }

    /**
     * Add the CSS & JavaScript files you want to be added on the FO.
     */
    public function hookHeader()
    {
        $this->context->controller->addJS($this->_path.'/views/js/front.js');
        $this->context->controller->addCSS($this->_path.'/views/css/front.css');
    }

    public function hookDisplayNotFound()
    {
        if(Tools::getValue('controller') == 'product' && Tools::getIsset('id_product')) {
            $this->context->smarty->assign(array(
                    'products' => $this->getProducts()
            ));
            return $this->context->smarty->fetch($this->getTplDir('product-list'));
        }
    }

    private function getArrVariables()
    {
        return array('description', 'description_short', 'link_rewrite', 'meta_description', 'meta_keywords', 'meta_title', 'name', 'available_now', 'available_later', 'delivery_in_stock', 'delivery_out_stock', 'id_image');
    }

    private function getProducts()
    {
        $accessories = $this->getAccessories();

        $products = array();

        // Add necessary variables for each product in list (a.k.a. raw products)
        foreach ($accessories as $key => $accessory) {
            $products[$key] = get_object_vars(new Product($accessory['id_product']));
            $products[$key]['id_product'] = $accessory['id_product'];
            $products[$key]['id_shop'] = (string)$this->context->shop->id;
            $products[$key]['id_lang'] = (string)$this->context->language->id;
            $products[$key]['id_product_attribute'] = Product::getDefaultAttribute($accessory['id_product']);
            $products[$key]['product_attribute_minimal_quantity'] = Attribute::getAttributeMinimalQty($products[$key]['id_product_attribute']);
            $products[$key]['id_image'] = Product::getCover($accessory['id_product']);

            foreach ($this->getArrVariables() as $var)
                $products[$key][$var] = $this->getArrayVariable($var, $products[$key]);

            $products[$key]['legend'] = (new Image((int)$products[$key]['id_image']))->legend;
            $products[$key]['legend'] = $this->getArrayVariable('legend',$products[$key]);
        }

        // See ProductListingFrontController
        return $this->prepareMultipleProductsForTemplate($products);
    }

    private function getArrayVariable($str, $product)
    {
        if(!is_array($product[$str]))
            return $product[$str];
        elseif(count($product[$str]) <= 0)
            return '';
        else {
            reset($product[$str]);
            return current($product[$str]);
        }
    }

    private function prepareProductForTemplate(array $rawProduct)
    {
        $product = (new ProductAssembler($this->context))
            ->assembleProduct($rawProduct)
        ;

        $presenter = $this->getProductPresenter();
        $settings = $this->getProductPresentationSettings();

        return $presenter->present(
            $settings,
            $product,
            $this->context->language
        );
    }

    private function prepareMultipleProductsForTemplate(array $products)
    {
        return array_map(array($this, 'prepareProductForTemplate'), $products);
    }

    private function getAccessories()
    {
        return Product::getAccessoriesLight($this->context->language->id, (int)Tools::getValue('id_product'));
    }

    /**
     * See ProductPresentingFrontController
     */

    private function getFactory()
    {
        return new ProductPresenterFactory($this->context, new TaxConfiguration());
    }

    private function getProductPresentationSettings()
    {
        return $this->getFactory()->getPresentationSettings();
    }

    private function getProductPresenter()
    {
        return $this->getFactory()->getPresenter();
    }

    /**
     * For Multistore compatibility (with different themes)
     */
    private function getTplDir($name)
    {
        $inCommon = 'vp_relatedproducts/views/templates/hook/'.$name.'.tpl';
        $module = _PS_MODULE_DIR_.$inCommon;
        $theme = _PS_THEME_DIR_.'modules/'.$inCommon;

        return file_exists($theme) ? $theme : $module;
    }
}
