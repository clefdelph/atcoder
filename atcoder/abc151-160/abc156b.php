<?php

list($num,$base)=explode(" ",trim(fgets(STDIN)));
$replacedNum=base_convert($num,10,$base);

echo strlen($replacedNum);
?>