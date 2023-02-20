<?php

class Garage
{
	private array $garage = [];

	public function add(CarTemplate $car): void
	{
		$this->garage[] = $car;
	}

	public function getCars(): array
	{
		return $this->garage;
	}
}