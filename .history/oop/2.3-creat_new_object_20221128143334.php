<?php
class Retangle
{
    public $width = 20;
    public $height = 10;

    public function getPerimeter()
    {
        return 2 * ($this->width + $this->height);
    }
    public function getArea()
    {
        return $this->width * $this->height;
    }
}

$a = new Retangle;
$a->width = 5;
$a->height = 10;
echo $a->getPerimeter();
echo $a->getArea();
