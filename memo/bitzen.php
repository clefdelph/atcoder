<?php

//bit　全探索
$array=[1,2,3];

 for ($i=0; $i<2**count($array);$i++){
     $put=[];
     
     for($j=0;$j<count($array);$j++){
         
         if(($i>>$j)&1){
             
         $put[]=$array[$j];
             
         }
     }
     print_r($put);
 }

?>