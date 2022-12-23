<?php
class A
{
    public $attr_1;
    //..
    function method_1()
    {
        //..
        echo "OK";
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
$b = new B;
//Thiết lập giá trị cho attr_2
$b->attr_2 = "Attr_2";
// echo $b->method_1();
echo $b->method_2();
