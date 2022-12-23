<?php

use Demo as GlobalDemo;

class Demo
{
    private $attr_1;
    public function setValue($value)
    {
        $this->attr_1 = $value;
    }
    public function getValue()
    {
        return $this->attr_1;
    }
}
$a = new GlobalDemo;
$a->setValue(50)
echo $a->attr_1;
