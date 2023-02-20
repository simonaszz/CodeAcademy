<?php

namespace App;

abstract class Worker extends Base\User
{
	public abstract function getSalaryBonus(): float;

	function __construct(string $name, int $age, protected float $salary)
	{
		parent::__construct($name, $age);
	}
}