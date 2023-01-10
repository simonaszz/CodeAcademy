<?php
// $name = 'Simonas';
// $age = 35;

// echo sprintf('My name is %s. My age is %d', $name, $age);




// Panaudojus "Execution operator" parodykite opėracinės sistemos informaciją, kurioje veikia PHP

$info = `cat /etc/os-release`;

echo $info;
