<?php

namespace App\Classes;

class Tag
{
	private array $body = [];
	private array $attributes = [];

	public static function create(string $tagName, bool $close = true): Tag
	{
		return new Tag($tagName, $close);
	}

	function __construct(private string $name, private bool $close = true)
	{
	
	}

	private function getAttributesAsLine(): string
	{
		$attrLine = '';

		foreach ($this->attributes as $attrName => $attrValue) {
			$attrLine .= ' ' . (is_numeric($attrName) ? $attrValue : sprintf('%s="%s"', $attrName, $attrValue));
		}

		return $attrLine;
	}

	public function setBody(string $body): self
	{
		$this->body[] = $body;

		return $this;
	}

	public function setAttribute(string $name, string $value): Tag
	{
		$this->attributes[$name] = $value;

		return $this;
	}

	public function setAttributes(array $attributes = []): Tag
	{
		$this->attributes = array_merge($this->attributes, $attributes);

		return $this;
	}

	public function get(): string
	{
		$attributes = $this->getAttributesAsLine();

		$result = '<' . $this->name . $attributes;

		if ($this->close) {
			$result .= '>';
			$result .= implode('', $this->body);
			$result .= sprintf('</%s>', $this->name);	
		} else {
			$result .= '/>';
		}

		return $result;
	}

	public function show(): void
	{
		echo $this->get();
	}
}