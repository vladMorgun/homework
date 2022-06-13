<?php
ini_set('max_execution_time',0);

$max=100;
$sqrt_max=(int)sqrt($max);

$numbers=str_repeat('1',$max);
$multiplier=2;

$time=time();

while($multiplier<=$sqrt_max)
{
    for($i=$multiplier;$i*$multiplier<$max;$i++)
        $numbers[$i*$multiplier]='0';
    while($numbers[++$multiplier]=='0');
}

echo 'time: ';
echo time()-$time.'<br>';

echo 'memory: ';
echo number_format(memory_get_peak_usage(true)).'<br>';

$primes=0;
for($i=2;$i<strlen($numbers);$i++)
    if($numbers[$i]=='1')$primes++;

echo 'primes/all: '.number_format($primes);
echo ' / '.number_format($max);