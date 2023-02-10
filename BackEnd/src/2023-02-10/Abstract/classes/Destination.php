<?php

class Destination {
	
	function __construct(private string $to, private string $from)
	{
	}

	public function getTo(): string
	{
		return $this->to;
	}

	public function getFrom(): string
	{
		return $this->from;
	}

	public function getDistance(): int
	{
		return 300;
	}
}