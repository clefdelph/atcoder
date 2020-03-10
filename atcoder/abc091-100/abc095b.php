<?php
list($kind,$dough)=explode(" ",trim(fgets(STDIN)));
$sweet=[];

for($i=0;$i<$kind;$i++){
    $sweet[]=trim(fgets(STDIN));
}

$count=0;

//計算1 少なくとも 1 つは全種類作る

$sum=array_sum($sweet);
$residue =$dough-$sum;
    
    if($residue>=0){
       $count+=$kind;
       //計算2 余ったら、最も少ない使用量のドーナツを作る
       $count+=intdiv($residue,min($sweet));
       echo $count;
    
    }else{
        echo 0;
    }


?>