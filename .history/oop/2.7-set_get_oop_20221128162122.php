<?php
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
//Thường sử dụng set và get khi biến trong class ở tầm vực private
$a = new Demo;
$a->setValue(20);
echo $a->getValue();
