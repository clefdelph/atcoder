<?php
$message=trim(fgets(STDIN));
$length=strlen($message);
$replace="";

for($i=0;$i<$length;$i++){
    $replace.="x";
}

echo $replace;

?>