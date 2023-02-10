<?php

class Visibility
{
	public string $publicVisibility = 'public';
	private string $privateVisibility = 'private';
	protected string $protectedVisibility = 'protected';

	public function show()
	{
		// $this->privateVisibility = 'private from inside';
		
		echo $this->publicVisibility . "<br>\n";
		echo $this->privateVisibility . "<br>\n";
		echo $this->protectedVisibility . "<br>\n";
	}
}