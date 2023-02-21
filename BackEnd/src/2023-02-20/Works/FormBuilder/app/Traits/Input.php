<?php

namespace App\Traits;

use \Exception;

trait Input
{
	public function input(
		string $type,
		string $name,
		array $attributes = []
	): string
	{
		$attrLine = $this->getAttributesAsLine($attributes, ['type', 'name']);

		return sprintf('<input type="%s" name="%s"%s>', $type, $name, $attrLine);
	}

	// public function password(string $name, ?string $id = null): string
	// {
	// 	return $this->input('password', $name, [
	// 		'id' => $id,
	// 	]);
	// }

	// public function checkbox(string $name, array $attributes = []): string
	// {
	// 	return $this->input('checkbox', $name, $attributes);
	// }
}