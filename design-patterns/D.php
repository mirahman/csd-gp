<?php 

interface Notifier
{
    public function send();
}


class Notification
{
    public $notificationMethod;

    public function __construct(Notifier $obj)
    {
        $obj->send();
    }
}

class Email implements Notifier
{
    public $content;
    public function __construct($content)
    {
        $this->content = $content;
    }
    public function send()
    {
        echo "i am sending Email: ".$this->content;
    }

}

class SMS implements Notifier
{
    public $content;
    public function __construct($content)
    {
        $this->content = $content;
    }
    public function send()
    {
        echo "i am sending sms: ".$this->content;
    }
}

$newSMS = new SMS("test");
$newEmail = new Email("welcome to csd class");

$notifyMizan = new Notification($newEmail);
