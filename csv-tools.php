<?php
function getCsvData($fileName, $withHeader = true)
{
    if(!file_exists($fileName)){
        echo "$filename nem található";
        return false;
    }
    $csvFile = fopen($fileName, 'r');
    $header = fgetcsv($csvFile);
    if ($withHeader) 
    {
        $Lines = $header;
    }
    else
    {
        $lines = [];
    }
    while (!feof($csvFile)){
        $line = fgetcsv($csvFile);
        $lines[] = $line;
    }
    fclose($csvFile);
    return $lines;
 
}
?>