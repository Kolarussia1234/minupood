<?php
/**
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
*
*  @author    Veebipoed.ee, Pangalingid
*  @copyright 2018 Veebipoed.ee, Pangalingid
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/

class VPModules extends Module
{
    public function __construct()
    {
        $this->name = 'vpmodules';
        $this->tab = 'administration';
        $this->version = '1.0.0';
        $this->author = 'Veebipoed.ee';
        $this->need_instance = true;

        parent::__construct();

        $this->displayName = $this->l('Veebipoed.ee Modules library');
        $this->description = $this->l('Contains Veebipoed.ee modules libraries');
    }

    public function install()
    {
        if (!parent::install()) {
            return false;
        } else {
            return true;
        }
    }
    
    public function uninstall()
    {
        if (!parent::uninstall()) {
            return false;
        } else {
            return true;
        }
    }
}
