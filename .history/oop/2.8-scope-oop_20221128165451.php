<?php
class Demo
{
    public $attr_1;
    private $attr_2;
    public function show($x)
    {
        return $this->attr_ . "$x";
    }
}

$a = new Demo;

$a->attr_1 = 15;
$a->attr_2 = 10;

echo $a->attr_1;
echo $a->attr_2;
