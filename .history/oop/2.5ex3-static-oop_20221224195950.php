<?php
class Rectangle
{
    public static $width;
    public static $height;

    public function getPermeter()
    {
        return 2 * ($this->width + $this->height);
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }
}

echo Rectangle::getPerimeter();
