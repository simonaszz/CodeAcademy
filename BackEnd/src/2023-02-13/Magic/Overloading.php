<?php

// https://www.php.net/manual/en/language.oop5.magic.php
// https://www.php.net/manual/en/language.oop5.overloading.php
class Overloading
{	
	public $a;

	public ?string $foo;

	function __construct(?string $foo = null)
	{
		$this->foo = $foo;
	}

	public function __set(string $name, mixed $value): void
	{
		printf("__set, name: \"%s\", value: \"%s\"\n", $name, $value);

		// throw new RuntimeException('Prop not defined');
	}

	public function __get(string $name)
	{
		printf("__get, name: \"%s\"\n", $name);

		// return '__get';

		// switch ($name) {
		// 	case 'abc':
		// 		return 123;
		// 		break;
		// 	case 'def':
		// 		return 456;
		// 		break;
		// 	default:
		// 		return null;
		// 		break;
		// }
	}

	public function __call(string $name, array $arguments): void
	{
		printf("__call, name: \"%s\", arguments: \"%s\"\n", $name, json_encode($arguments));
	}

	public static function __callStatic(string $name, array $arguments): void
	{
		printf("__callStatic, name: \"%s\", arguments: \"%s\"\n", $name, json_encode($arguments));
	}
}

$ovrl = new Overloading();

$ovrl->a = 123;
$ovrl->b = 456;

$ovrl->add = 'BMW x5';

var_dump($ovrl->abc);
var_dump($ovrl->def);
var_dump($ovrl->aaaaaa);
var_dump($ovrl->ccccc123);

var_dump($ovrl->load());
var_dump($ovrl->get());
var_dump($ovrl->set(1, 2, [123, 'hello' => 'world']));

Overloading::run('static');

var_dump($ovrl);