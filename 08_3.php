<?php
// файл numbers.txt
$filename = "numbers.txt";
$lineNumbers = file("$filename");
for($i = 0; $i <  count($lineNumbers); $i++){
    list($lineLeft, $lineRight) = explode(';', $lineNumbers[$i]);
    $stringToArray = explode(" ", $lineLeft);
    $sumLeft = array_sum($stringToArray);
    if($sumLeft % count($stringToArray) == 0 ){
        $average = $sumLeft / count($stringToArray) . ' 0';
    }else{
        $average = $sumLeft / count($stringToArray) ;
    }
    $formatString = str_replace( '.', ' ', $average);
    $formatString = substr($average, 0, 3);
    if($formatString == rtrim($lineRight)){
        $label = "True";
        echo $lineNumbers[$i] . " " . $label . " " . $formatString. "<br>";
    }else{
        $label = "False";
        echo $lineNumbers[$i]. " " . $label. " " .$formatString . "<br>";
    }
}
//выводит:  2 4 5;3 2 False 3.6
//          3 2 1;2 0 True 2 0
//          6 5 2 1 2;3 1 False 3.2
