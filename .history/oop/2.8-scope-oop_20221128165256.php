<?php
class Demo
{
    public $attr_1;
    private $attr_2;
}

$a = new Demo;

$a->attr_1 = 10;
echo $a->attr_1;