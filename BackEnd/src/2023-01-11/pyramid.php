<?php

$n = 9;
for ($i = 1; $i <= $n; $i++) {

    for ($j = 1; $j <= $i; $j++) {

        print $i;
    }

    print '<br>';
}




for ($i = 1; $i <= 9; $i++) {
    echo str_repeat($i, $i) . "<br>";
}

echo "<br>";

$x = 1;
while ($x <= 9) {
    echo str_repeat($x, $x) . "<br>";
    $x++;
}