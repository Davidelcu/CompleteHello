<?php
/** Hello World */

/**
 * Hello World Block
 *
 * @author Davide Luca <davide.lc89@gmail.com
 * @version 0.1.0
 * @package Helloworld
 */
class Luca_Helloworld_Block_Helloworld extends Mage_Core_Block_Template
{
    /**
     * getMessage
     *
     * return configured message
     * @return mixed
     */
    public function getMessage()
    {
        return Mage::helper("luca_helloworld")->getConfig("configuration/message");
    }

    /**
     * isEnabled
     *
     * return true if module is enable
     * @return bool
     */
    public function isEnabled()
    {
        return Mage::helper("luca_helloworld")->isEnabled();
    }
}
