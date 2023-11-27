<?php
require_once('csv-tools.php');
ini_set('memorí_limit', '560M');

$fileName = 'car-db.csv';
$csvData = getCsvData($fileName);

$arr = array('first' => 'a','second'=>'b',);
$key = array_search('a', $arr);

$header = $csvData[0];
$keyMaker = array_search('make', $header);

?>