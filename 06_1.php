<?php
define("NUMBER", 5);
define("UNTIL", 100);
function getNum($number, $until){
    $i = 0;
    $count = 0;
    while($i < $until){
        if($i % $number == 0){
            $count++;
        }
        $i++;
    }
    return $count;
}

print_r(getNum(NUMBER, UNTIL));
