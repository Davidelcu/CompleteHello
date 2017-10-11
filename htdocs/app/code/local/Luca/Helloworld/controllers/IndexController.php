<?php
/** Hello World */

/**
 * Hello World Index Controller
 *
 * @author Davide Luca <davide.lc89@gmail.com>
 * @version 0.1.0
 * @package Helloworld
 */

class Luca_Helloworld_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        /**
         * Index Action
         */
        $this->loadLayout();
        $this->renderLayout();
    }
}
