<?php

class Bmw extends Vehicle implements CarTemplate, VehicleTemplate
{
	public function getModel(): string
	{
		return $this->model;
	}

	public function getFuelType(): string
	{
		return 'fuelType';
	}
}