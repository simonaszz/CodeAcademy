<?php

namespace App;

use App\Base\User;
use App\Traits\Talk;

class Student extends User
{
	use Talk;
	
	function __construct(
		string $name,
		int $age,
		private string $crouse,
		private float $scholarship = 0,
	)
	{
		parent::__construct($name, $age);
	}
}