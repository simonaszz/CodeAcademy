<?php

class User
{
    public $name;
    public $username;
    public $fallowerCount;
}


$garyObject = new User();

$garyObject->name = 'Simonas Ubartas';
$garyObject->username = 'Vartotojas';
$garyObject->fallowerCount = 50;

print_r($garyObject);
