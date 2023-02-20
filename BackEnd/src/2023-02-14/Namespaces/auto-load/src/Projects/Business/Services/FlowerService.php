<?php

namespace App\Projects\Business\Services;

class FlowerService
{
	public function __toString(): string
	{
		return sprintf("%s => %s => %s\n", __NAMESPACE__, __CLASS__, 'Gėlių Pristatymas');
	}
}