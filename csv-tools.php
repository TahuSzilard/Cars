<?php
function getCsvData($fileName)
{
    if(!file_exists($fileName)){
        echo "$filename nem található";
        return false;
    }
    $csvFile = fopen($fileName, 'r');
    $lines = [];
    while (! feof($csvFile)){
        $line = fgetcsv($csvFile);
        $lines[] = $line;
    }
    fclose($csvFile);

    return $lines;

}


$mysqli->close();










function getMakers($csvData)
{
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
/*
        if($model != $data[$keyMaker])
            {
                $model = $data[$keyMaker];
                $result[$maker][] = $model;
            }
*/
    }
    return $makers;
    print_r($makers);
}

?>