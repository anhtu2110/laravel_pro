<?php
class Rectangle
{
    //Thuộc tính
    //public là tầm vực của biến
    public $height = 10;
    public $width = 12;

    //Phương thức tính chu vi
    public function getPerimeter()
    {
        return 2 * ($this->height + $this->width);
    }
    public function getArea()
    {
        return $this->height * $this->width;
    }
}
$a = new Rectangle;
echo $a->getPerimeter();
