<?php
class MinuMooduldisplayModuleFrontController extends ModuleFrontController
{
  public function initContent()
  {
    parent::initContent();
    $this->setTemplate('module:minumoodul/views/templates/front/display.tpl');
  }
}