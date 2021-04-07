<?php
include_once("Point.php");

class MovablePoint extends Point{
    public float $xSpeed;
    public float $ySpeed;
    function __construct($x,$y,$xSpeed,$ySpeed)
    {
        parent::__construct($x,$y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    function setSpeed($xSpeed,$ySpeed)
    {
        $this->x = $xSpeed;
        $this->y = $ySpeed;
        return $this;
    }
    function getSpeed(){
        return [[$this->x,$this->y],[$this->xSpeed,$this->ySpeed]];
    }
    function toString()
    {
        return "(x,y) = ".($this->x. ",". $this->y)." Speed = ".($this->xSpeed.",".$this->ySpeed);

    }
    function moveablePoint()
    {
        $this->x+=$this->xSpeed;
        $this->y+=$this->ySpeed;
        return $this;
    }
}