<?php
class Demo
{
    public $attr_1;
    private $attr_2;
}

$a = new Demo;

$a->attr_1 = 15;
$a->attr_2 = 10;

echo $a->attr_1;
echo $a->attr_2;
