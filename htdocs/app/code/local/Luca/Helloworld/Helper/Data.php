<?php
/** Hello World */

/**
 * Hello World Data
 *
 * @author Davide Luca <davide.lc89@gmail.com>
 * @version 0.1.0
 * @package Helloworld
 */
class Luca_Helloworld_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * getConfig
     *
     * get configured message
     * @param $config
     * @return mixed
     */
    public function getConfig($config)
    {
        return Mage::getStoreConfig("luca_helloworld/" . $config);
    }

    /**
     * isEnabled
     *
     * return true if the module is enable
     * @return bool
     */
    public function isEnabled()
    {
        return $this->getConfig("configuration/enabled");
    }
}
