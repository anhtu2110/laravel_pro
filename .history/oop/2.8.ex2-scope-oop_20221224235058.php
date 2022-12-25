<?php
class Demo
{
    public $attr_1;
    private $attr_2 = 20;
    protected $attr_3 = 60;
    // public function show()
    // {
    //     return $this->attr_2;
    // }
}

class User extends Demo
{
    function __construct()
    {
        echo $this->attr_3;
    }
    public function show()
    {
        return $this->attr_2;
    }
}
new User;

$a = new Demo;
echo $a->show();
