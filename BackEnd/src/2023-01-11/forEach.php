<?php

$arr = ['a', 'b', 'c', 'd'];

foreach ($arr as $key => $value) {
	echo sprintf('key: %d => value: %s', $key, $value) . "<br>\n";
}

foreach ($arr as $value) {
	echo sprintf('value: %s', $value) . "<br>\n";
}

$arr = [
	'a' => 'aaa',
	'b' => 'bbb',
	'c' => 'ccc',
	'd' => 'ddd'
];

foreach ($arr as $i => $v) {
	echo sprintf('key: %s => value: %s', $i, $v) . "<br>\n";
}

foreach ($arr as $arrV) {
	echo sprintf('value: %s', $arrV) . "<br>\n";
}
