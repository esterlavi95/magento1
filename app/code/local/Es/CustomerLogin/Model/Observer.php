<?php
class Es_CustomerLogin_Model_Observer
{

    /**
    * @param Varien_Event_Observer $observer
    */
     public function customerLogin($observer)
     {
        $customer = $observer->getEvent()->getCustomer();
        $customerEmail = $customer->getEmail();

        $customerLogCollection = Mage::getModel('es_customerlogin/counter')
            ->getCollection()
            ->addFieldToFilter('customer_email', ['eq' => $customerEmail]);
        
        if (count($customerLogCollection)) {
            $customerLog = $customerLogCollection->getFirstItem();
            $customerLog->setLoginCounter($customerLog->getLoginCounter() + 1);
        } else {
            $customerLog = Mage::getModel('es_customerlogin/counter');
            $customerLog->setCustomerEmail($customerEmail);
            $customerLog->setLoginCounter(1);
        }
        $customerLog->save();
     }

}
?>