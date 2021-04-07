<?php
class Point3D extends Point2D
{
    public float $z;
    function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }
    function toString()
    {
        return "X = " . $this->x . " Y = " . $this->y . " Z = " . $this->z;
    }
    function setXYZ($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
        return $this;
    }
    function getXYZ()
    {
        return [$this->x, $this->y, $this->z];
    }
}
