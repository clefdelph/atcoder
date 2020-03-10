<?php
$num=trim(fgets(STDIN));
$divide=[];
//1～9までを出力
//あまりが 0 で商が 9 以下
for($i=1;$i<=9;$i++){
 
    $division = intdiv($num,$i);
    $residue = $num%$i;
    
    if($division<=9&&$residue==0){
        $divide[]=$i;
        echo "Yes";
        break;
    }
    
}
 
if(count($divide)==0){
    echo "No";
}
?>