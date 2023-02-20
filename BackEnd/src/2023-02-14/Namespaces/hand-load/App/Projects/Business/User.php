<?php

namespace App\Projects\Business;

class User
{
	public function __toString(): string
	{
		return sprintf("%s => %s => %s\n", __NAMESPACE__, __CLASS__, 'Mantas');
	}
}