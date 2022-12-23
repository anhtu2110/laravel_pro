<?php
class A
{
    public $attr_1;
    function method_1()
    {
        echo "OK";
    }
}

class B extends A
{
    public $attr_2;
    public function method_2()
    {
        return echo $this->attr_2;
    }
}
$b = new B;
$b->attr_2 = "Method_2";
echo $b->method_2();
