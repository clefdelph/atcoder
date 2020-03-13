<?php
list($num,$score,$correct)=explode(" ",trim(fgets(STDIN)));
$array=[];
$result=array_pad($array,$num,$score-$correct);


for($i=0;$i<$correct;$i++){
     $human=trim(fgets(STDIN));
     $result[$human-1]++;
}

for($j=0;$j<count($result);$j++){
    echo ($result[$j]>0)? "Yes"."\n":"No"."\n";
}
?>