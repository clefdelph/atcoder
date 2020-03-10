<?php
$num=trim(fgets(STDIN));
$number=explode(" ",trim(fgets(STDIN)));
$count=0;
 
for($i=0;$i<count($number)-2;$i++){
    if ($number[$i]<$number[$i+1]&&$number[$i+1]<$number[$i+2]){
    $count++;    
    }
    
    if ($number[$i]>$number[$i+1]&&$number[$i+1]>$number[$i+2]){
    $count++;    
    }
}
 
 
echo $count;
?>