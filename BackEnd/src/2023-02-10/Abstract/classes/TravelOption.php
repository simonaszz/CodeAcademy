<?php

abstract class TravelOption {
	abstract public function getPriceForOneKm(): float;
	abstract public function getDistancePrice(Destination $destination): float;

	public function getClassName(): string
	{
		return get_class($this);
	}
}