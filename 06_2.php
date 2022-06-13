<?php
define("NUMBER_ELEMENTS", 100);

$array = range(3, 100);
$a = [];
//проверка является число простым
function checkPrime($num)
{
    $isPrime = True;
    for ($i = 2; $i < $num; $i++)
    {
        if ($num % $i == 0)
        {
            $isPrime = False;
            break;
        }
    }
    if ($isPrime) {
       return $num;
    }
    else{
        return 0;
    }
}
//логика: если функция вернула не ноль з
for ($i = 0; $i < count($array); $i++){
    if(checkPrime($array[$i]) > 0){
        $a[] = checkPrime($array[$i]);
        if(count($a) == NUMBER_ELEMENTS){
            break;
        }
    }
}
var_dump($a);
//ура!!
//выводит:23593.
print(array_sum($a));

