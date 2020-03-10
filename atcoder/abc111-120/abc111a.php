<?php
$num =trim(fgets(STDIN));
$array = str_split($num);
$str="";
 
for ($i=0;$i<3;$i++){
    
    if ($array[$i]==1){
     $array[$i]=9;
    }elseif($array[$i]==9){
     $array[$i]=1;    
    }
    $str.=$array[$i];
}
echo $str;
?>