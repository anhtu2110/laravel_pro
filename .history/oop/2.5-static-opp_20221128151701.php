<?php
class Rectangle
{
    public static $width = 10;
    public static $height = 15;

    public static function getPerimeter()
    {
        return 2 * (self::$width + self::$height);
    }
    public static function getArea()
    {
        return self::$width * self::$height;
    }
}
Rectangle::$height = 15;
Rectangle::$width = 25;
echo Rectangle::getPerimeter();
