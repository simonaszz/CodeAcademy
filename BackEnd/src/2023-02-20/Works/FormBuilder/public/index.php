<?php

require_once '../vendor/autoload.php';

use App\Classes\FormBuilder;

$formBuilder = new FormBuilder();

echo $formBuilder->open('index.php', 'POST');
echo "\n";

echo $formBuilder->label('first-name', 'First Name', [
	'for' => 'second-name',
	'style' => 'border: 1px solid red',
	'class' => 'last-name',
]);
echo "\n";
echo $formBuilder->input('text', 'first-name', [
	'id' => 'first-name',
	'style' => 'border: 1px solid red',
]);
echo "\n";

echo $formBuilder->label('last-name', 'Last Name');
echo "\n";
echo $formBuilder->input('text', 'last-name', [
	'id' => 'first-name',
	'class' => 'last-name',
]);
echo "\n";

echo $formBuilder->label('email', 'Email');
echo "\n";
echo $formBuilder->input('email', 'email', [
	'id' => 'email'
]);
echo "\n";
echo $formBuilder->email('email', [
	'id' => 'email'
]);
echo "\n";

echo $formBuilder->label('password', 'Password');
echo "\n";
echo $formBuilder->password('password', 'password');
echo "\n";

echo $formBuilder->input('checkbox', 'checkbox-item', [
	'id' => 'flexCheckDefault',
	'class' => 'form-check-input'
]);
echo "\n";
echo $formBuilder->label('flexCheckDefault', 'Default checkbox', [
	'class' => 'form-check-label',
]);
echo "\n";

echo $formBuilder->checkbox('checkbox-item', [
	'id' => 'flexCheckDefault',
	'class' => 'form-check-input'
]);
echo "\n";
echo $formBuilder->label('flexCheckDefault', 'Default checkbox', [
	'class' => 'form-check-label',
]);
echo "\n";

echo $formBuilder->radio('radio-item', [
	'id' => 'flexCheckDefault',
	'class' => 'form-check-input'
]);
echo "\n";
echo $formBuilder->label('flexCheckDefault', 'Default checkbox', [
	'class' => 'form-check-label',
]);
echo "\n";

echo $formBuilder->button('Submit');
echo "\n";

echo $formBuilder->close();