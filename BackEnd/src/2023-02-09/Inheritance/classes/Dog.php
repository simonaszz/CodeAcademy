<?php

class Dog extends Animal
{
	public const LIFE_TIME = 10;

	function __construct(string $name, string $sound)
	{
		parent::__construct($name, $sound);
	}
}