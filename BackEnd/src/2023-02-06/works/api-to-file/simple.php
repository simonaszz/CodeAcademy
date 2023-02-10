<?php

$url = 'https://randomuser.me/api/?format=csv&results=100';

file_put_contents('data/users-simple.csv', file_get_contents($url));