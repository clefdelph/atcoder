<?php
list($num,$limit)=explode(" ",trim(fgets(STDIN)));
$human=explode(" ",trim(fgets(STDIN)));
$count=0;

for($i=0;$i<$num;$i++){
    if($human[$i]>=$limit){
    $count++;
    }
}

echo $count;
?>