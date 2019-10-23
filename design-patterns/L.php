<?php

class Employee 
{
    public function welcome()
    {
        echo "welcome to our employee database";
        $this->storeInDabase();
        $this->notifyEmployee();
        $this->clearSecurity();

    }
}

class ParttimeEmployee extends Employee
{
    public function welcome()
    {
        echo "You are not welcome";
        parent::welcome();
        $this->doSomethingExtra();
    }
}