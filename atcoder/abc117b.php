<?php
$polygon=trim(fgets(STDIN));
$side=explode(" ",trim(fgets(STDIN)));

rsort($side);
$longest=$side[0];

unset($side[0]);
$otherSum=array_sum($side);

if($longest<$otherSum){
    echo "Yes";
}else{
    echo "No";
}
?>