<?php
class mymoduledisplayModuleFrontController extends ModuleFrontController
{
  public function initContent()
  {
    parent::initContent();
    $this->setTemplate('module:MinuMoodul/views/templates/front/display.tpl');
  }
}