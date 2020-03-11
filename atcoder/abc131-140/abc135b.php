<?php

$num=trim(fgets(STDIN));
$numbers=explode(" ",trim(fgets(STDIN)));
$original=$numbers;

sort($numbers);
$replaced=$numbers;

$count=0;

foreach ($original as $k=>$v){
    if ($original[$k]!=$replaced[$k]){
     $count++;    
    }
    
}

echo ($count==0||$count==2) ? "YES":"NO";

?>