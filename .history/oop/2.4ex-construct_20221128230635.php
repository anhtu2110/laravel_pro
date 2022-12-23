<?php
class Rectangle
{
    //Thuộc tính
    //public là tầm vực của biến
    public $height;
    public $width;

    public function __construct()
    {
        echo "Đã tạo đối tượng";
    }
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
