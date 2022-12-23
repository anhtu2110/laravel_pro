<?php
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
$a = new Demo;
$a->attr_1 = 20;
echo getValue();
