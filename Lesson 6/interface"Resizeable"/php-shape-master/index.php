<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:17
 */
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');

$randRate = (Rand(1,100))/100;

$circle = new Circle('Circle 01', 3);
$cylinder = new Cylinder('Cylinder 01', 3 , 4);
$rectangle = new Rectangle('Rectangle 01', 3 , 4);
$square = new Square('Square 01', 4 , 4, 4);

$arrayShape = [$circle, $square, $rectangle,$cylinder];
echo "%rate = ".$randRate ."<br />";
foreach ($arrayShape as $value) {
    echo "Area Before === ".$value->calculateArea()."<br>";
    $value->resize($randRate);
    echo "Area After === ".$value->calculateArea()."<br>";
}

