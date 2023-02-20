<?php

namespace App\Workable;

use App\Worker as Workable;

class Pilot extends Workable {

	use \App\Traits\Talk;

	public function getSalaryBonus(): float
	{
		return $this->salary * 5;
	}
}