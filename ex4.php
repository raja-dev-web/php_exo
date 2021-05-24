<?php
$start_time = microtime(true);
$a = 20;
$b = 10;
if ($a == $b) {
    echo $a. " est egale à ".$b;
}
elseif ($a < $b) {
    echo $a. " est plus petit que ".$b;
}
else{
    echo $a. " est plus grand que ".$b;
}
$end_time = microtime(true);
$execution_time = ($end_time - $start_time);
  
echo " Execution time of script = ".$execution_time." sec";
?>