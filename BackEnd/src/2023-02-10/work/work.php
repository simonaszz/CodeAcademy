<?php
require_once(__DIR__ . '/classes/Person.php');
require_once(__DIR__ . '/classes/Programmer.php');
require_once(__DIR__ . '/classes/Teacher.php');
require_once(__DIR__ . '/classes/Student.php');

$persons = [
    new Programmer('Simon'),
    new Student('Jonas'),
    new Teacher('Tomas'),
];


foreach ($persons as $person) {
    print $person->greetings()  . '<br>';
}
