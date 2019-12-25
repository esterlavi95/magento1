<?php
 
class IEs_CustomerLogin_Model_Resource_Counter extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('es_customerlogin/counter', 'id');
    }
}