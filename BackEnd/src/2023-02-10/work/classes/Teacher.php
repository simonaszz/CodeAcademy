<?php
class Teacher extends Person
{
    public function greetings(): string
    {
        return 'children, i am no teacher ' . $this->name . '.';
    }
}
