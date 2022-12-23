<?php
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

Rectangle::$height = 20;
Rectangle::$width = 30;
echo Rectangle::getArea();
