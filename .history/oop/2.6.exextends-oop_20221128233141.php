<?php
class A
{
    protected $attr_1 = 30;
    function method_1()
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
// $a->attr_1 = 30;
echo $b->method_1();
