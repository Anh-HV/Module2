<?php
class QuadraticEquation
{
    public $a, $b, $c;
    public function  __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    /**
     * Get the value of a,b,c
     */
    public function getter()
    {
        return "a = " . $this->a . " b = " . $this->b . " c = " . $this->c;
    }

    public function getDelta()
    {
        return ($this->b*$this->b - (4*$this->a*$this->c));
    }
    public function getRoot1()
    {
        return (-$this->b+pow($this->getDelta(),0.5))/(2*$this->a);
    }

    public function getRoot2()
    {
        return (-$this->b-pow($this->getDelta(),0.5))/(2*$this->a);
    }
}
