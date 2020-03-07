<?php
$num =trim(fgets(STDIN));
$count=0;

for($i=1;$i<=$num;$i++){
    if(strlen($i)%2==1){
    $count++;
    }
}

echo $count;
?>