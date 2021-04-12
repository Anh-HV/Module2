<?php
include_once 'shape/Shape.php';
include_once 'shape/Circle.php';
include_once 'shape/Rectangle.php';
include_once 'shape/Square.php';

$circle = new Circle('Circle', 10);
$square = new Square('Square', 5);
$rectangle = new Rectangle("rectangle", 20, 15);

$randomRate = mt_rand(1, 100) / 100;

$arrayShape = [$circle, $square, $rectangle];

foreach ($arrayShape as $value) {
    echo "Area ".$value->name." : ".$value->calculateArea()."<br>";
    if($value instanceof Square) $value->howToColor();
    echo "<br>";
}