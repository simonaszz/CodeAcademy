<?php

namespace App\Traits;

trait Button
{
	public function button(string $title, string $type = 'button', array $attributes = []): string
	{
		$attrLine = $this->getAttributesAsLine($attributes, ['type']);

		return sprintf('<button type="%s"%s>%s</button>', $type, $attrLine,  $title);
	}
}