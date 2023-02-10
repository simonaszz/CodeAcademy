<?php

class Plane extends TravelOption
{
	function __construct(
		private float $weight,
		private int $engines
	)
	{
		
	}

	public function getPriceForOneKm(): float
	{
		return 5;
	}

	public function getDistancePrice(Destination $destination): float {
		return (($this->weight / $this->engines) * $destination->getDistance()) * $this->getPriceForOneKm();
	}
}