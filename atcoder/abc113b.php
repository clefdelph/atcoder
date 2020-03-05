<?php
$candidate=trim(fgets(STDIN));
list($temperature,$T)=explode(" ",trim(fgets(STDIN)));
$height=explode(" ",trim(fgets(STDIN)));
$subs=[];
 
for($i=0;$i<$candidate;$i++){
$sub=abs($T-($temperature-$height[$i]*0.006));
$subs[]=$sub;
}
 
$minKeys=array_keys($subs,min($subs));
echo $minKeys[0]+1;
?>