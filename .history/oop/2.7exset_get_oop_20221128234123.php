<?php

use Demo as GlobalDemo;

class Demo
{
    public $attr_1;
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
