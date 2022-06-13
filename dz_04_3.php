<?php
function fizz_buzz($f, $b, $c){
    $num = 1;
    $array_string = [];
    while($num < $c){
        if($num % $f === 0 && $num % $b === 0){
            $array_string[] = "FB";
        }elseif($num % $f === 0){
            $array_string[] = "F";
        }elseif($num % $b === 0){
            $array_string[]  = "B";
        }else $array_string[] = $num;
        $num++;
    }return implode(' ', $array_string)."\n";
}

$array_strings = file('files/file.txt');
$file_write = fopen("files/write.txt", "a");
foreach ($array_strings as $string) {

    list ($fizz, $buzz, $to) = explode(' ', $string);
    $res_fb = fizz_buzz($fizz, $buzz, $to);
    fwrite($file_write, $res_fb);
}
