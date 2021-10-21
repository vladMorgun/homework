<?php

$handle1 = fopen('php://stdin', 'r');
$fizz= fgets($handle1);

$handle2 = fopen('php://stdin', 'r');
$buzz = fgets($handle2);

$handle3 = fopen('php://stdin', 'r');
$to = fgets($handle3);
$num = 1;
    while($num < $to){
        if($num % $fizz === 0){
            echo 'F';
        }elseif($num % $buzz === 0){
            echo 'B';
        }else echo $num;
       $num++;
    }

