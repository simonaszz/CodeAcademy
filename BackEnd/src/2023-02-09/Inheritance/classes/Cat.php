<?php

class Cat extends Animal
{
	public const LIFE_TIME = 15;

	function __construct(string $name)
	{
		parent::__construct($name, 'Miau');
	}
}