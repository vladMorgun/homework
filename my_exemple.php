<?php
$handle = fopen("php://stdin", "r");
$age = fgets($handle);

if ($age < 18) {
   echo 'Вам нет 18 лет!';
} else {
    echo "Добро пожаловать!";
}

