<?php

class Person
{
    private function __construct()
    {
    }

    public static $instance;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

$p1 = Person::getInstance();
$p2 = Person::getInstance();

var_dump($p1 === $p2); # true
