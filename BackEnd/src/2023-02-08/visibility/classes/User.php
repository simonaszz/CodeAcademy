<?php

class User
{
	private string $firstName;
	private string $lastName;
	private int    $code;

	function __construct(
		string $firstName, 
		string $lastName = NULL,
		int    $code
	)
	{
		$this->setFirstName($firstName);

		$this->setLastName($lastName);

		$this->code = $code;
	}

	public function getFirstName(): string
	{
		return $this->firstName;
	}
	
	public function setFirstName(string $firstName): void
	{
		$this->firstName = ucfirst($firstName);
	}

	public function getLastName(): string
	{
		return $this->lastName;
	}

	public function setLastName(string $lastName): void
	{
		$this->lastName = ucfirst($lastName);
	}

	public function getCode(): int
	{
		return $this->code;
	}
}