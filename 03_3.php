<?php
$handle = fopen('php://stdin', 'r');
$fizz= fgets($handle);
$buzz = fgets($handle);
$to = fgets($handle);
$num = 1;
while($num < $to){
    if($num % $fizz === 0 && $num % $buzz === 0){
        echo 'FB';
    }elseif($num % $fizz === 0){
        echo 'F';
    }elseif($num % $buzz === 0){
        echo 'B';
    }else echo $num;
    $num++;
} 
fclose($handle);
