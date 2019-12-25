<?php
class Es_CustomerLogin_Model_Resource_Counter_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
        $this->_init('es_customerlogin/counter');
    }
}