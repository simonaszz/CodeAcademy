<?php

namespace App\Projects\Business\Services;

class BallonService
{
	public function __toString(): string
	{
		return sprintf("%s => %s => %s\n", __NAMESPACE__, __CLASS__, 'Balionų Pristatymas');
	}
}