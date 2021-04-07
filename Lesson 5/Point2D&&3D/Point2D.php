<?php

class Point2D
{
    public float $x;
    public float $y;
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function toString()
    {
        return "X = ".$this->x . " Y = " . $this->y;
    }
    public function setXY($x, $y)
    {
        $this->x= $x;
        $this->y = $y;
        return $this;
    }
    public function getXY(){
        return [$this->x,$this->y];
    }

    /**
     * Get the value of x
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set the value of x
     *
     * @return  self
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get the value of y
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set the value of y
     *
     * @return  self
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }
}
