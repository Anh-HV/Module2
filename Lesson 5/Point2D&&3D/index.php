<?php

include_once("Point2D.php");
include_once("Point3D.php");

$d2 = new Point2D(3,2);
$d2->setXY(5,4);
var_dump($d2->getXY());
echo $d2->toString()."<br />";

$d3 = new Point3D(2,4,5);
echo $d3->toString();