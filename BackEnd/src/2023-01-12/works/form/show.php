<?php

var_dump($_POST);
var_dump($_POST['user']);
var_dump($_POST['user']['name']);
var_dump($_POST['langs']);
var_dump($_POST['additiona_data']);
var_dump($_SERVER['HTTP_X_REQUESTED_WITH'] ?? null);