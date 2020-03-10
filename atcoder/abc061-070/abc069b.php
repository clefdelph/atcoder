<?php
$word =trim(fgets(STDIN));
$length = strlen($word);
echo $word[0].($length-2).$word[$length-1];
?>