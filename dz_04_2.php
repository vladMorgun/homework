<?php

$file_array = file("files/to_read.txt");
$file_write = fopen("files/04_2.txt", "a");
$array_count = count($file_array);
$arr = [];
foreach ($file_array as $item){
    $arr[] = strlen($item);
}
$array_sum = array_sum($arr);
$average = $array_sum / count($file_array);

foreach ($file_array  as $item){
    if(strlen($item) > $average){
        fwrite($file_write, $item);
    }
}
fclose($file_write);



