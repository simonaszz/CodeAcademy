<?php

class Animal
{
	private int $createdAt;

	function __construct(
		private string $name,
		private ?string $sound = null
	)
	{
		$this->createdAt = time();
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function getSound(): ?string
	{
		return $this->sound;
	}

	public function getCreatedAt(): string
	{
		return $this->createdAt;
	}

	public function getLifeTime() 
	{
		return static::LIFE_TIME * 365 * 24 * 60 * 60;
	}
}