<?php

class Boat extends Vehicle implements VehicleTemplate
{
	public function getFuelType(): string
	{
		return 'fuelType';
	}
}