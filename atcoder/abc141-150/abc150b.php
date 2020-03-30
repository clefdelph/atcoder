<?php
$length=trim(fgets(STDIN));
$str=trim(fgets(STDIN));
$count=0;

for ($i=0;$i<$length-2;$i++){

    if($str[$i]=="A" && $str[$i+1]=="B" && $str[$i+2]=="C"){
        $count++;
    }
}
echo $count;
?>
