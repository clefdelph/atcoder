<?php
$time=trim(fgets(STDIN));
$array=str_split(trim(fgets(STDIN)));

$max = 0;
$result = 0;

for($i=0;$i<$time;$i++){
    
    if($array[$i]=="I"){
        $result++;
    }elseif($array[$i]=="D"){
        $result--;
    }
    
    if($max<$result){
        $max=$result;
    }
}

echo $max;
?>