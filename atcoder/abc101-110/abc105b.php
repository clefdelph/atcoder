<?php
$dollar =trim(fgets(STDIN));
$count =0;
 
for($j=0;$j<=14;$j++){
    for ($i=0;$i<=25;$i++){    
      
        $total =$i*4+$j*7;
        if ($total==$dollar){
            $count++;
        }
    }
}
 
if ($count>0){
    echo "Yes";
}else{
    echo "No";
}
 
?>