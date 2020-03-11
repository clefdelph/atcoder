<?php
list($num,$special)=explode(" ",trim(fgets(STDIN)));
$enemy=explode(" ",trim(fgets(STDIN)));


 if($num<=$special){
     echo "0";
 }else{
   rsort($enemy);
   
    for($i=0;$i<$special;$i++){
     unset($enemy[$i]);
    }
    echo array_sum($enemy); 
}

?>