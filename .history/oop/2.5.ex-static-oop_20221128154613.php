<?php
class Rectangle
{
    //Khai báo thuộc tính
    public static $width;
    public static $height;
    //Phương thức tính chu vi
    public static function getPerimeter()
    {
        return (2 * (self::$width + self::$height));
    }
    //Phương thức tính diện tích
    public static function getArea()
    {
        return (self::$width * self::$height);
    }
}

class Demo
{
    function __construct()
    {
        Rectangle::$width = 20;
        Rectangle::$height = 30;
        echo Rectangle::getPerimeter();
    }
}
function getArea($w, $h)
{
    Rectangle::$width = $w;
    Rectangle::$height = $h;
    return Rectangle::getArea();
}
echo getArea(5, 10);
