<?php
$liste = array("raja","fed","frederick","Cynthia","aland");
for ($i=0; $i<count($liste); $i++) { 
    print_r($i." est ".$liste[$i]);
    echo "<br>";
}
$liste[] = "Valan";
array_push($liste,"Jean","Debohra");
print_r($liste);
echo "<br>";

for ($i=0; $i<count($liste); $i++) { 
    print_r($i." est ".$liste[$i]);
    echo "<br>";
}

?>