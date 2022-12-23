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
}
$b = new B;
echo $b->method_1();
