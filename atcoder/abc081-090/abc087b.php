<?php
$yen500=trim(fgets(STDIN));
$yen100=trim(fgets(STDIN));
$yen50=trim(fgets(STDIN));
$money=trim(fgets(STDIN));

$count = 0;


for($i=0;$i<=$yen500;$i++){
 for($j=0;$j<=$yen100;$j++){
  for($k=0;$k<=$yen50;$k++){
    
    $result=$i*500+$j*100+$k*50;
        if($result==$money){
        $count++;    
        }
    
  }   
 }   
}

echo $count;
?>