<?php
abstract class Person
{
    abstract function greetings(): string;
    function __construct(public ?string $name = null)
    {
        // $this->name = $name;
    }
}
