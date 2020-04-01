<?php
list($N,$M,$C)=explode(" ",trim(fgets(STDIN)));
$B=explode(" ",trim(fgets(STDIN)));
$count=0;


for($j=0;$j<$N;$j++){

    $A=explode(" ",trim(fgets(STDIN)));
    $sum=0;

    for($i=0;$i<$M;$i++){
        $sum+=$A[$i]*$B[$i];
    }
  
    $sum+=$C;
   
    if($sum>0){
        $count++;
    }
}

echo $count;
?>