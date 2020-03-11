<?php
$num=trim(fgets(STDIN));
$array=[];
for($i=0;$i<$num;$i++){
 $array[]=trim(fgets(STDIN));   
}

$sum=0;

rsort($array);
$sum+=intdiv($array[0],2);

unset($array[0]);
$sum+=array_sum($array);

echo $sum;
?>