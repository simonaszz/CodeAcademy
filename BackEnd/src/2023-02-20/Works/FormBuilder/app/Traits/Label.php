<?php

namespace App\Traits;

trait Label
{
	public function label(string $for, string $text, array $attributes = []): string
	{
		$attrLine = $this->getAttributesAsLine($attributes, ['for']);

		return sprintf('<label for="%s"%s>%s</label>', $for, $attrLine, $text);
	}
}