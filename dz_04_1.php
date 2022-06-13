<?php
//открываем файл "to_read.txt" который лежит в папке files
$file_read = fopen("files/to_read.txt", "r");
//открываем файл "to_write.txt" который лежит в папке files
$file_write = fopen("files/to_write.txt", "a");

while(! feof($file_read)){
    $str = fgets($file_read);
    fwrite($file_write, $str."\n");
}

fclose($file_read);
fclose($file_write);