<?php
include_once('Rectangle.php');
include_once __DIR__ . '/../Interface/Colorable.php';

class Square extends Rectangle implements Colorable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }

    public function howToColor()
    {
        echo "Color all four sides";
    }
}



