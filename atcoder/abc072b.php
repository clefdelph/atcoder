<?php
$str =trim(fgets(STDIN));
$array = str_split($str);
$length = strlen($str);
$afterStr="";
 
 
 
for($i=1;$i<=$length;$i+=2){
    $afterStr.=$array[$i-1];
}
 
echo $afterStr;
 
?>