<?php

class User
{
	// public ?string $firstName;
	// public ?string $lastName;

	// function __construct(?string $firstName = null, ?string $lastName = null)
	// {
	// 	printf("%s::__construct<br>\n", __CLASS__);

	// 	$this->firstName = $firstName;
	// 	$this->lastName = $lastName;
	// }
	
	public const CONSTANT = 'SOME-VALUE';
	public const CONSTANT_SUM = 2 + 2;
	public const CONSTANT_ARR = ['a', 'b', 'c'];
	
	function __construct(
		public ?string $firstName = null,
		public ?string $lastName = null
	) {
		printf("%s::__construct<br>\n", __CLASS__);
	}
	
	function __destruct()
	{
		echo "__destruct<br>\n";
	}

	public function getFirstName(): ?string
	{
		return $this->firstName;
	}
	
	public function setFirstName(?string $firstName = null): void
	{
		$this->firstName = $firstName;
	}

	public function getLastName(): ?string
	{
		return $this->lastName;
	}

	public function setLastName(?string $lastName = null): void
	{
		$this->lastName = $lastName;
	}

	public function getFullName(): string
	{
		// return $this->firstName . ' ' . $this->lastName;
		return $this->getFirstName() . ' ' . $this->getLastName();
	}

	public function showConstants(): void
	{
		var_dump(self::CONSTANT);
		var_dump(self::CONSTANT_SUM);
		var_dump(self::CONSTANT_ARR);
	}
}