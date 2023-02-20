<?php

// https://www.php.net/manual/en/language.oop5.magic.php
class Garage
{
	private array $garage = [];

	public function add($x): void
	{
		$this->garage[] = $x;
	}

	// https://www.php.net/manual/en/language.oop5.magic.php#object.invoke
	public function __invoke($x): void
	{
		$this->add($x);
	}

	// https://www.php.net/manual/en/language.oop5.magic.php#object.tostring
	public function __toString(): string
	{
		return json_encode($this->garage);
	}
}

$garage = new Garage();

$garage->add('BMW x5');
$garage->add('Toyota Yaris');
$garage->add('VW Golf');
$garage->add('Ford Fiesta');

$garage('Toyota Supra');

echo $garage;
// file_put_contents('garage.json', $garage);