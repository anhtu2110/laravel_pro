<?php

use Demo as GlobalDemo;

class Rectangle
{
    //Thuộc tính
    //public là tầm vực của biến
    public static $height = 10;
    public static $width = 12;

    //Phương thức tính chu vi
    public static function getPerimeter()
    {
        return 2 * (self::$height + self::$width);
    }
    public static function getArea()
    {
        return self::$height * self::$width;
    }
}
class Demo
{
    function __construct()
    {
        Rectangle::$height = 20;
        Rectangle::$width = 40;
        echo Rectangle::getArea();
    }
}
echo new Demo;
