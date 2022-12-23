<?php

use Retangle as GlobalRetangle;

class Retangle
{
    public $width;
    public $height;

    public function __construct()
    {
        echo "Đã tạo đối tượng";
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
echo $a->getPerimeter();
