<?php
/**
* @copyright BroSolutions.
* @email contact@brosolutions.net
*/  
class BroSolutions_SmartCopyPaste_Block_Smartcopypaste extends Mage_Core_Block_Template
{
    public function smartyText()
    {
        return Mage::getStoreConfig('smartcopypaste/global/smarttext');
    }
}