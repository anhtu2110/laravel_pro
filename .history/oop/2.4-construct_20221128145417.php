<?php

class Rectangle
{
    public $width;
    public $height;

    public function __construct()
    {
        $this->width = 12;
        $this->height = 10;
    }
    public function getPerimeter()
    {
        return 2 * ($this->width + $this->height);
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }
}
$a = new Rectangle;
$a->height = 5;
$a->width = 10;
echo $a->getPerimeter();
