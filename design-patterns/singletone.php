<?php

class Database 
{
    private static $connection;

    private function __construct()
    {
        echo "I am being called";
    }

    public static function getInstance()
    {
        if(is_null(self::$connection)) {
            self::$connection = new Database();
        }
        return self::$connection;
    }

    private function __clone()
    {

    }
}



$connectionOne = Database::getInstance();
$connectionTwo = Database::getInstance();
$connectionThree = Database::getInstance();


var_dump($connectionOne);
var_dump($connectionTwo);
var_dump($connectionThree);
