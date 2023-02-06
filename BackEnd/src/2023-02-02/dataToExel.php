<?php


require('apiData.php');

try {
    $details = json_decode($apiData, 1)['results'][0];
} catch (Exception $e) {
    echo 'Fetch failed with error: ' . $e;
    die();
}

require('functions.php');




$flattenedArray = flat($details);


$fileLocation = "file" . date('Ymd') . ".xls";

header("Content-Disposition: attachment; filename=\"$fileLocation\"");
header("Content-Type: application/vnd.ms-excel");


$arrayKeys =  array_keys($flattenedArray);
$arrayValues = array_values($flattenedArray);

$finalArray = array(
    $arrayKeys,
    $arrayValues
);

foreach ($finalArray as $row) {

    print  implode("\t",  array_values($row)) . "\r\n";
}
exit;