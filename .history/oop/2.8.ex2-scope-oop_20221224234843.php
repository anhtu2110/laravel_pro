<?php
class Demo
{
    public $attr_1;
    private $attr_2;
    protected $attr_3;
    private function show()
    {
        return $this->attr_2;
    }
}

class User extends Demo
{
    function __construct()
    {
        echo $this->attr_3;
    }
}
$a = new Demo;

$a->attr_2 = 15;
echo $a->show();
