<?php

require_once 'handload.php';

$businessProjectUser = new \App\Projects\Business\User();
$businessEducationUser = new \App\Projects\Education\User();
$businessWeddingUser = new \App\Projects\Wedding\User();

echo $businessProjectUser;
echo $businessEducationUser;
echo $businessWeddingUser;

$customer = new \App\Projects\Wedding\Customer();

echo $customer->getFlowers();
echo $customer->getCakes();
echo $customer->getBallons();
echo $customer->getPlayList();