<?php

$array_strings = file('files/file.txt');
list ($fizz, $buzz, $to) = explode(' ', $array_strings[0]);
$fizz = intval($fizz);
$buzz = intval($buzz);

$fizzBuzz = function($number) use ($fizz, $buzz) {
    $array_string   = [];
    if($number % $fizz === 0 && $number % $buzz ===0){
        $array_string[] = "FB";
    }elseif($number % $fizz === 0){
        $array_string[] ="F";
    }elseif($number % $buzz === 0){
        $array_string[]  = "B";
    }else $array_string[] = $number;
    return implode(' ',$array_string )."\n";
};

$b = array_map($fizzBuzz, range(1, $to, 1));
print_r($b);







