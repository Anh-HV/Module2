<?php 
include_once("Point.php");
include_once("MovablePoint.php");


$mp = new MovablePoint(2,2,1,2);
echo "<pre>";
echo $mp->toString();
echo "</pre>";
$mp->moveablePoint();
echo $mp->toString();
