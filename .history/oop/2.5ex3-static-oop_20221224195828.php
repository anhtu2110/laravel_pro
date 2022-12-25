<?php
class Rectangle
{
    public $width;
    public $height;

    public function __construct()
    {
        $this->width = 12;
        $this->height = 30;
    }

    public function getPermeter()
    {
        return 2 * ($this->width + $this->height);
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }
}
