<?php
// フィボナッチ数列（DPによるボトムアップ）
$array=array();
$dp=array_pad($array,10,0);
$dp[0]=0;

for($i=1;$i<10;$i++){
    
    if($i==1||$i==2){
        $dp[$i]=1;
    }else{
        $dp[$i]=$dp[$i-1]+$dp[$i-2];
    }
    
}

print_r($dp);

?>
