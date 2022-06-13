<?php


$handle = fopen("php://stdin", "r");
$age = fgets($handle);

if ($age < 18) {
   echo 'Вам нет 18 лет!';
} else {
    echo "Добро пожаловать!";
}

$t = date("H");
if ($t > "6" && $t < "10") {
    echo "Have a good morning!";
} elseif ($t > "10" && $t < "18") {
    echo "Have a good day!";
} elseif ($t > "18" && $t < "22") {
    echo "Good evening!";
} else {
    echo "Good night!";
}

$a = array(1, 2, 3, 4, 5);
$b = count($a);
if($b == 0){
    echo 'Массив пуст.';
}elseif($b == 1){
    echo 'В массиве один элемент';

}else{
    echo "Массив имеет $b элементов";
}