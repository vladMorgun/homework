<?php
echo "Give me the mark!\n";
$handle = fopen ("php://stdin","r");
$mark = fgets($handle);



echo "If you are a man, press 1!\n";
$handle = fopen ("php://stdin","r");
$input = fgets($handle);

echo ($input == 1) ? "MAN!" : "Hey, girl!";

echo "\n";
$s = 'not empty';
if ($s !='') echo $s;

if (9 % 2 != 0) echo 'not zero!';
if ($s) echo $s;

if (9 % 2) echo 'not zero!';