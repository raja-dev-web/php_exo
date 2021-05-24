<?php
$cars = array(
    array(
        "name"=>"Urus", 
        "type"=>"SUV", 
        "brand"=>"Lamborghini"
    ),
    array(
        "name"=>"Cayenne", 
        "type"=>"SUV", 
        "brand"=>"Porsche"
    ),
    array(
        "name"=>"Bentayga", 
        "type"=>"SUV", 
        "brand"=>"Bentley"
    ),
);

echo "METHOD - 1 <br><br>";
$size = count($cars);

for($i = 0; $i < $size; $i++)
{
    foreach($cars[$i] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "<br>";
}
echo "<hr> <br>";
echo "METHOD - 2 <br><br>";
foreach ($cars as $elements) {
    foreach ($elements as $key => $value) {
        echo $key." : ".$value."<br>";
    }
    echo "<br>";
}

?>