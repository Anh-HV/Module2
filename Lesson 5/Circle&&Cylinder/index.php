<?php
include_once("Circle.php");
include_once("Cylinder.php");

$cir = new Circle("CK01", 20, "black");
echo $cir->name . "<br />";
echo "S Circle = " . $cir->getArea() . "<br />";
echo "CV Circle = " . $cir->getPerimeter() . "<br />";
$cir->setColor("blue");
echo $cir->color. "<br />";

$cyl = new Cylinder("Cyl01", 30, "red", 20);
echo $cyl->name . "<br />";
echo "S Cylinder = " . $cyl->getArea()."<br />";
echo "S_cover Cylinder = " . $cyl->getPerimeter()."<br />";