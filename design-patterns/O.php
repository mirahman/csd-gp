<?php

interface PaymentInterface
{
    public function capture();
    public function verify();
}

class CreditCard implements PaymentInterface
{
    public function capture()
    {

    }

    public function verify()
    {

    }
}

class Bkash implements PaymentInterface
{
    public function capture()
    {

    }

    public function verify()
    {

    }
}

class Payment
{
    public function doPayment(PaymentInterface $payment, $amount)
    {
        //$payment = new $paymentType(); 
        $payment->docapture();
        $payment->verify();
    }
}



class PaymentAlt
{
    public function doPayment($payment, $amount)
    {
        
    }
}


class PaymentCreditCard extends PaymentAlt
{
    public function doPayment($payment, $amount)
    {
        
    }
}