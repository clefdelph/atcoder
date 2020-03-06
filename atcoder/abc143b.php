<?php
$num=trim(fgets(STDIN));
$takoyaki=explode(" ",trim(fgets(STDIN)));
$recovery=0;

for($i=0;$i<$num;$i++){
    for($j=$i+1;$j<$num;$j++){
     $recovery+=$takoyaki[$i]*$takoyaki[$j];
    }
}

echo $recovery;
?>