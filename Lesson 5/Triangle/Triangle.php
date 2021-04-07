<?php
include_once("Shape.php");

class Triangle extends Shape
{
    protected $side1;
    protected $side2;
    protected $side3;
    function __construct($name, $color, float $side1 = 1.0, float $side2 = 1.0, float $side3 = 1.0)
    {
        parent::__construct($name, $color);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }
    function getPerimeter()
    {
        return "CV Triangle = " . $this->side1 + $this->side2 + $this->side3;
    }
    function getArea()
    {
        $a = $this->side1;
        $b = $this->side2;
        $c = $this->side3;
        $p = ($a + $b + $c) / 2;
        $area = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
        return round($area, 2);
    }
    public function __toString()
    {
      echo "My name is $this->name  <br /> Has color is $this->color <br />". " My area is ." .$this->getArea() . "- My perimeter is " . $this->getPerimeter() . "<br>";
    }
}
