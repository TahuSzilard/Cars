<?php

$mysqli = new mysqli("localhost","root",null,"cars");

if($mysqli->connect_errno)
{
    echo"Failed to connect to MySQL: ".$mysqli -> connect_error();
    exit();
}
echo"connected\n";

$makers = getMakers($csvData);

foreach($makers as $maker)
{
    $mysqli->query("INSERT INTO cars (name) VALUES ('$maker')");
    echo"$maker\n";
}

function insertMakers($mysqli, $makers, $truncate = false)
{
    if($truncate)
    {
        $mysqli->query("TRUNCATE TABLE makers;");
    }


}




?>