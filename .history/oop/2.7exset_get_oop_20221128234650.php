<?php

use Demo as GlobalDemo;

class Demo
{
    private $attr_1;
    public function setValue($value)
    {
        $this->attr_1 = $value;
    }
    public function getValue()
    {
        return $this->attr_1;
    }
}
$a = new GlobalDemo;
$a->setValue(50);
echo $a->getValue();

class Rectangle
{
    private $width;
    private $height;
    public function setValue($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
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
$a->setValue(5, 6);
echo $a->getPerimeter();
