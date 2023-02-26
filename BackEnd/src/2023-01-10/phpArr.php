<?php

// Sukurkite "a", "b", "c" masyvą. Išveskite masyvo reikšmę naudodami funkciją var_dump().
define('LINE', "<br>\n");

$arr = ['a', 'b', 'c'];
var_dump($arr);


// Naudodamiesi $arr masyvu iš ankstesnės užduoties, išveskite pirmo, antro ir trečio elementų turinį.

print LINE;

print "{$arr[0]} {$arr[1]} {$arr[2]}";


// Sukurkite masyvą $arr = ['a', 'b', 'c', 'd'] ir panaudoja jį išveskite eilutė 'a + b, c + d'.


print LINE;

$arr = ['a', 'b', 'c', 'd'];

print "{$arr1[0]} + {$arr1[1]}, {$arr1[2]} + {$arr1[3]}";



// Sukurkite $arr masyvą su elementais 2, 5, 3, 9. Padauginkite pirmąjį masyvo elementą iš antrojo, o trečiąjį elementą
// iš ketvirtojo. Sudėkite rezultatus ir priskirkite kintamajam $result. Išveskite šio kintamojo reikšmę.
print LINE;

$arr = [2, 5, 3, 9];



$result = ($arr[0] * $arr[1]) + ($arr[2] * $arr[3]);

print_r($result);



// asasas   Užpildykite $arr masyvą skaičiais nuo 1 iki 5. Nedeklaruokite masyvo elementų, o tiesiog užpildykite jį $arr[] =
// nauja reikšme.


print LINE;


$arr0 = range(1, 5);

$slice1 = array_slice($arr0, 0, 5);

foreach ($slice1 as $s) {

    print $s;
}

print LINE;

$arr1 = [];
array_push($arr1, 1, 2, 3, 4, 5);
print_r($arr1);