<?php
class Point
{
    public float $x;
    public float $y; 
    public function __construct($x,$y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    function toString()
    {
        return "X = ".$this->x.", Y = ".$this->y;
    }
    function setXY($x,$y)
    {
        $this->x = $x;
        $this->y= $y;
        return $this;
    }
    function getXY(){
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