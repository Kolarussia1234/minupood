<?php
/**
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
*
*  @author    Veebipoed.ee, EveryPay
*  @copyright 2015 Veebipoed.ee, EveryPay
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/

class EverypayMycardsModuleFrontController extends ModuleFrontController
{
    public $ssl = true;

    public function __construct()
    {
        parent::__construct();
        $this->context = Context::getContext();
        include_once $this->module->getLocalPath().'lib/CardStorageLibrary.php';
    }

    //Add breadcrumbs on my account > credit cards  link START
    public function getBreadcrumbLinks()
    {
        $breadcrumb = parent::getBreadcrumbLinks();

        $breadcrumb['links'][] = [
            'title' => $this->getTranslator()->trans('My account', [], 'Breadcrumb'),
            'url' => $this->context->link->getPageLink('my-account', true)
        ];

        return $breadcrumb;
    }
    //Add breadcrumbs on my account > credit cards  link END
    
    /**
     * @see FrontController::initContent()
     */
    public function initContent()
    {
        parent::initContent();
        $action = Tools::getValue('action');
        if ($action == "default") {
            $id_card = (int)Tools::getValue('id_card');
            $card = new CardStorageLibrary($id_card);
            if (isset($card->id_card) && $card->id_customer == $this->context->customer->id) {
                CardStorageLibrary::removeDefault($this->context->customer->id);
                $card->is_default=1;
                $card->save();
            }
        } elseif ($action == "delete") {
            $id_card = (int)Tools::getValue('id_card');
            $card = new CardStorageLibrary($id_card);
            if (isset($card->id_card) && $card->id_customer == $this->context->customer->id) {
                $card->remove();
            }
        }
        if (Tools::getValue('ajax')) {
            die();
        }
        $cards = CardStorageLibrary::getCards($this->context->customer->id);
        $this->context->smarty->assign("cards", $cards);
        $this->context->smarty->assign("this_path", _MODULE_DIR_."everypay/");
        $this->setTemplate('module:everypay/views/templates/front/mycards.tpl');
    }
}