<?php

namespace App\Projects\Education\Services;

class DanceService
{
	public function __toString(): string
	{
		return sprintf("%s => %s => %s\n", __NAMESPACE__, __CLASS__, 'Išmoksite šokti');
	}
}