<?php
include_once("Circle.php");

class Cylinder extends Circle
{
    public $height;
    function __construct($name, $radius,$color, $height)
    {
        parent::__construct($name, $radius,$color);
        $this->height = $height;
    }
    function getArea()
    {
        return parent::getArea()*2+parent::getPerimeter()*$this->height;
    }
    function getAreaCovered()
    {
        return parent::getPerimeter()*$this->height;
    }

}
