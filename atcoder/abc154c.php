<?php
$num=trim(fgets(STDIN));
$str=explode(" ",trim(fgets(STDIN)));
$times=array_count_values($str);
 
 if(max($times)==1){
    echo "YES";
}else{
    echo "NO";
}
?>