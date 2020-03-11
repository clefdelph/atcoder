<?php
$num=trim(fgets(STDIN));
$difficulty=explode(" ",trim(fgets(STDIN)));

sort($difficulty);
$center=($num/2)-1;

echo $difficulty[$center+1]-$difficulty[$center];

?>