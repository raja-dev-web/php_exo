<?php
function hello():void
{
    echo "Hello World !";
}
function helloNew():String
{
    return 10;
}
function helloNew1():bool
{
    return 0;
} 
function areaRectangle(float $length, float $breadth)
{
    return $length * $breadth;

}

function reducetozero($number)
{
    echo $number."<br>";
    if ($number == 0) {
        return;
    }
    else {
        $number --;
        return reducetozero($number);
    }
}
function reducetozero1($number)
{
    echo $number."<br>";
    if ($number != 0) {
        $number --;
        return reducetozero1($number);
    }
}
function reducetozero2($number)
{
    echo $number."<br>";
    while ($number != 0) {
        $number --;
        return reducetozero1($number);
    }
}
reducetozero2(10);
echo areaRectangle(3,2); 
hello();
$show = helloNew();
echo $show;
$show1 = helloNew1();
echo var_dump($show1);
?>