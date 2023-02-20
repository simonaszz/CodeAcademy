<?php

namespace App\Traits;

trait Talk {
	public function greetings()
	{
		$className = get_class($this);
		$className = explode('\\', $className);
		$className = array_pop($className);

		return sprintf('Hello, my name is %s. I\'m %s', $this->name, $className);
	}

	public function ask()
	{
		return 'Any questions?';
	}
}