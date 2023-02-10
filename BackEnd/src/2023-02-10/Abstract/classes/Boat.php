<?php

class Boat extends TravelOption
{
	function __construct(
		private float $weight,
		private int $sailors
	)
	{
		
	}

	public function getPriceForOneKm(): float
	{
		return 2;
	}

	public function getDistancePrice(Destination $destination): float {
		return (($this->weight / $this->sailors) * $destination->getDistance()) * $this->getPriceForOneKm();
	}
}