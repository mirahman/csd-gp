<?php

class ConsumerBilling
{
    public function getPackageName()
    {
        return "GP Package one";
    }

    public function getPackgePrice()
    {
        return "10.99 Taka";
    }
}

class ConsumerBillingAdapter extends ConsumerBilling
{
    public function getPackageNamePrice()
    {
       return parent::getPackageName(). " is now offered at ".parent::getPackagePrice(); 
    }
}



