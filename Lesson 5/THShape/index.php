<?php

include_once("Cylinder.php");
include_once("Circle.php");
include_once("Rectangle.php");
include_once("Square.php");

$cir = new Circle("CK01",20);
echo $cir->name."<br />";
echo "S Circle: ".$cir->calculateArea()."<br />";
echo "CV Circle".$cir->calculatePerimeter()."<br />";

$cyl = new Cylinder("Cyl01",20,30);
echo $cyl->name."<br />";
echo "S Cylinder: ".$cyl->calculateArea()."<br />";
echo "CV Cylinder: ".$cyl->calculatePerimeter()."<br />";

$rec = new Rectangle("Rec01",20,30); 
echo $rec->name."<br />";
echo "S Rectangle: ".$rec->calculateArea()."<br />";
echo "CV Rectangle: ".$rec->calculatePerimeter()."<br />";

$sqr = new Square("SQ01",5);
echo $sqr->name."<br />";
echo "S Square: ".$sqr->calculateArea()."<br />";
echo "CV Square".$sqr->calculatePerimeter()."<br />";