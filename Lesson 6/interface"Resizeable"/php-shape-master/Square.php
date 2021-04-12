<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:16
 */
include_once ('Rectangle.php');
require_once ('__DIR__/../../Interface/Resizeable.php');

class Square extends Rectangle
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width, $width);
    }
    public function resize(float $percent)
    {
        $this->width= $this->width*$percent;
    }
}