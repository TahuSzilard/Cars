<?php
require_once('csv-tools.php');
ini_set('memorí_limit', '560M');

$fileName = 'car-db.csv';
$csvData = getCsvData($fileName);

if(empty($csvData))
{
    echo"Nem található adat a csv fájlban.";
    return false;
}

$makers = getMakers($csvData);
$mysqli = new mysqli("localhost","my_user","my_password","my_db");


if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

print_r($result);
print_r($makers);


?>