<?php

namespace App\Projects\Education;

class User
{
	public function __toString(): string
	{
		return sprintf("%s => %s => %s\n", __NAMESPACE__, __CLASS__, 'Kiril');
	}
}