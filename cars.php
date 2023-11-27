<?php
require_once('csv-tools.php');
require_once('cardb.php');

ini_set('memorí_limit', '560M');

$fileName = 'car-db.csv';
$csvData = getCsvData($fileName);

if(empty($csvData))
{
    echo"Nem található adat a csv fájlban.";
    return false;
}

$makers = getMakers([]);




print_r($result);
print_r($makers);


?>