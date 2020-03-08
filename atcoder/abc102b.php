<?php
$num=trim(fgets(STDIN));
$array=explode(" ",trim(fgets(STDIN)));
$sub=[];

for($i=0;$i<$num-1;$i++){
    for($j=$i+1;$j<$num;$j++){
        $sub[]=abs($array[$i]-$array[$j]);
    }
}

echo max($sub);
?>