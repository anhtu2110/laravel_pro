<?php
class Rectangle
{
    public static $width;
    public static $height;

    public function getPermeter()
    {
        return 2 * (self::$width + self::$height);
    }

    public function getArea()
    {
        return self::$width * self::$height;
    }
}

echo Rectangle::getPerimeter();
