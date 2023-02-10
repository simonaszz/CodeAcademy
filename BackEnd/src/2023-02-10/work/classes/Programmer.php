<?php

class Programmer extends Person
{
    public function greetings(): string
    {
        return 'Hello world i am programmer called ' . $this->name . '.';
    }
}
