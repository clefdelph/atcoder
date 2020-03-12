<?php
list($lowest,$highest,$num)=explode(" ", trim(fgets(STDIN)));


if($highest-$lowest+1<=$num*2){

    for ($k=$lowest;$k<=$highest;$k++){
        echo $k."\n";
    }
    
}else{

    for($i=0;$i<$num;$i++){
        echo $lowest+$i."\n";
    }
    
    for($j=$num;$j>0;$j--){
        echo $highest-($j-1)."\n";
    }
}
?>