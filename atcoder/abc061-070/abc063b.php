<?php
$str=trim(fgets(STDIN));
$array=str_split($str);
$result=array_count_values($array);

echo max($result)==1 ? "yes":"no";
?>