<?php

list($num,$time)=explode(" ",trim(fgets(STDIN)));

$cost =PHP_INT_MAX;

for($i=0;$i<$num;$i++){
    $path=explode(" ",trim(fgets(STDIN)));
    
    if($time>=$path[1]){
    $cost=min($cost,$path[0]);
    }
 
}


if($cost==PHP_INT_MAX){
    echo "TLE";
}else{
   echo $cost;    
}


?>