<?php

namespace App\Workable;

use App\Worker;
use App\Traits;

class Driver extends Worker
{
	use Traits\Talk;
	
	const ALLOWED_CATEGORIES = ['A', 'B', 'C', 'D'];

	function __construct(
		string $name,
		int $age,
		float $salary,
		string $category,
		private int $expirience = 0,
	)
	{
		parent::__construct($name, $age, $salary);

		if (!in_array($category, self::ALLOWED_CATEGORIES)) {
			throw new Exception('Category not allowed');
		}
	}

	public function getSalaryBonus(): float
	{
		return $this->salary * 3;
	}
}