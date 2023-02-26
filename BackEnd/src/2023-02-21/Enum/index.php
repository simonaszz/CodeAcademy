<?php

require_once 'WoodType.php';

$woodTypes = [
	'Maple',
	'Oak',
	'Ash',
	'Birch',
	'Alder'
];

$woodTypes = array_combine($woodTypes, $woodTypes);

define('WOOD_TYPES', $woodTypes);

$woodTypes['Ash'] = 123;
// WOOD_TYPES['Ash'] = 123;

// var_dump($woodTypes['Ash'], WOOD_TYPES['Ash'], WoodType::ASH);
// var_dump($woodTypes[2], WOOD_TYPES[2]);


function createWoodTable(WoodType $type)
{
	var_dump($type, $type->name, $type->value);
}

// createWoodTable(123);
createWoodTable(WoodType::BIRCH);
createWoodTable(WoodType::MAPLE);
createWoodTable(WoodType::from(456));

var_dump(array_column(WoodType::cases(), 'name'));
var_dump(array_column(WoodType::cases(), 'value'));