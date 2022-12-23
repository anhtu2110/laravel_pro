<?php
class Rectangle
{
    public static $width;
    public static $height;

    public static function getPerimeter()
    {
        return 2 * (self::$width + self::$height);
    }
    public static function getArea()
    {
        return self::$width * self::$height;
    }
}
$a->self::$width = 5;
$a->self::$height = 10;
