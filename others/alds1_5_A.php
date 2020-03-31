<?php

$length=trim(fgets(STDIN));
$array=explode(" ",trim(fgets(STDIN)));
$num=trim(fgets(STDIN));
$answer=explode(" ",trim(fgets(STDIN)));


for($k=0;$k<$num;$k++){
    for($i=0;$i<2**$length;$i++){
        $sum =0;
        
         for($j=0;$j<$length;$j++){
             if(($i>>$j)&1){
                 $sum+=$array[$j];
             }
         }
         
           if($sum==$answer[$k]){
               echo "yes"."\n";
               break;
           }elseif($sum>$answer[$k]){
              echo "no"."\n";
              break;
          }
    }
}

?>