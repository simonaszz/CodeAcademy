<?php

class Car extends TravelOption
{
	function __construct(
		private float $weight,
		private int $passangers
	)
	{
		
	}

	public function getPriceForOneKm(): float
	{
		return 1.45;
	}

	public function getDistancePrice(Destination $destination): float
	{
		return (($this->weight / $this->passangers) * $destination->getDistance()) * $this->getPriceForOneKm();
	}
}