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

$header = $csvData[0];

$keyMaker = array_search('make', $header);
$result = [];
$maker = '';
$model = '';
$makers = [];
$isHeader = true;
foreach($csvData as $data)
{
    if(!is_array($data))
    {
        continue;
    }

    if($isHeader)
    {
        $isHeader = false;
        continue;
    }

    if($maker != $data[$keyMaker])
        {
            $maker = $data[$keyMaker];
            $makers [] = $maker;
        }

    if($model != $data[$keyMaker])
        {
            $model = $data[$keyMaker];
            $result[$maker][] = $model;
        }
}
print_r($result);
print_r($makers);


?>