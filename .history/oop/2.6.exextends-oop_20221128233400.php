<?php
class A
{
    protected $attr_1;
    public function setValue($value)
    {
        $this->attr_1 = $value;
    }
    public function method_1()
    {
        return $this->attr_1;
    }
}

class B extends A
{
    public $attr_2;
    public function method_2()
    {
        return $this->attr_2;
    }
}
$a = new A;
$a->setValue(40);
echo $a->method_1();
