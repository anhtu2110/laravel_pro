<?php
class Demo
{
    protected $attr_1 = 10;
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
echo $a->$attr_1;
