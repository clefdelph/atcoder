<?php

$num=explode(" ",trim(fgets(STDIN)));
$time =trim(fgets(STDIN));
$sum=0;
    
rsort($num);
$sum = $num[0]*pow(2,$time);

unset($num[0]);
$sum+=array_sum($num);

echo $sum;

?>