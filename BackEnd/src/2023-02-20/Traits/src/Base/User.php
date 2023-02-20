<?php

namespace App\Base;

class User {
	// protected string $name;
	// protected int $age;

	function __construct(protected string $name, protected int $age)
	{
		$this->name = ucfirst($this->name);
	}
}