<?php 

interface Payment
{
    public function callbackURL();
    public function verify();
    public function notifyCustomer();
}

interface CreditCardPayment
{
    public function validateCC();
}

class CreditCard implements Payment, CreditCardPayment
{
    public function validateCC()
    {

    }
    public function callbackURL()
    {

    }
    public function verify()
    {

    }
    public function notifyCustomer()
    {

    }

}

class Bkash implements Payment
{
    public function callbackURL()
    {

    }
    public function verify()
    {

    }
    public function notifyCustomer()
    {
        
    }
}