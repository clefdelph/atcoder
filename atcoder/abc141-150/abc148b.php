<?php
$length =trim(fgets(STDIN));
list($forwardStr,$backStr)=explode(" ",trim(fgets(STDIN)));
$combinedStr="";
 
for($i=0;$i<$length;$i++){
$combinedStr.=$forwardStr[$i].$backStr[$i];
}
 
echo $combinedStr;    
?>