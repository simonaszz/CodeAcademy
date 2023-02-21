<?php

namespace App\Classes;

// V1
use App\Traits\Label;
use App\Traits\Input;
use App\Traits\Button;

class FormBuilder
{
	// V1
	use Label;
	use Input;
	use Button;

	const ALLOWED_INPUT_ELEMENTS = ['checkbox', 'radio', 'password', 'email'];

	private function getAttributesAsLine(array $attributes, array $exclude = []): string
	{
		$attrLine = '';

		foreach ($attributes as $attrName => $attrValue) {
			if (!in_array($attrName, $exclude)) {
				$attrLine .= sprintf(' %s="%s"', $attrName, $attrValue);
			}
		}

		return $attrLine;
	}

	public function __call(string $name, array $arguments): string
	{
		if (in_array($name, self::ALLOWED_INPUT_ELEMENTS)) {
			if (!isset($arguments[0])) {
				Exception('Element name not set "%s" not found');
			}

			$attributes = $arguments[1] && is_array($arguments[1]) ? $arguments[1] : [];

			return $this->input($name, $arguments[0], $attributes);
		}

		throw new Exception(sprintf('Element "%s" not found', $name));	
	}

	public function open(string $action, string $method = 'GET'): string
	{
		return sprintf('<form action="%s" method="%s">', $action, $method);
	}

	public function close(): string
	{
		return '</form>';
	}
}