<?php
//дз 5урок 1
$array_numbers = [4, 7, 1, 6, 3, 704, 2, 8, 41, 0];
function show_max_number($array){
    return max($array);
}



//дз 5урок 1.2
$array_strings = ["25", "0953857410", "Валера", "admin", "post@gmail.com"];
$longest = 0;
for($i = 0; $i < count($array_strings); $i++)
{
    if(mb_strlen($array_strings[$i]) > mb_strlen($array_strings[$longest]))
    {
        $longest = $i;
    }

}
echo $array_strings[$longest];