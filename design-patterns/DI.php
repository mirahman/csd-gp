<?php 

class Drawing
{
    public $color;
    public $canvas;
    public function __construct(Color $color, $width, $height)
    {
        $this->color = $color;
    }
}

class Color
{
    public function __construct($red, $green, $blue, $opacity)
    {

    }
}

$newColor = new Color(100, 200, 0);
$art = new Drawing($newColor, 10, 20);