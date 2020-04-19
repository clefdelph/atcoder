<?php

list($chair,$human,$width)=explode(" ",trim(fgets(STDIN)));

$count=0;

$chair -= $width;

while($chair>=$human+$width){
    $chair -= $human+$width;
    $count++;
}

echo $count;

?>
