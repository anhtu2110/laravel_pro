<?php
class Rectangle
{
    public $width;
    public $height;

    public function __construct()
    {
        echo "Đã tạo đối tượng";
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
$a->width = 20;
$a->height = 30;
echo $a->getPerimeter();
