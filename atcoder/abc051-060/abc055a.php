<?php
$time=trim(fgets(STDIN));
$discount=200 * intval($time/15);
echo 800*$time-$discount;
?>