<?php
class Demo
{
    public $attr_1;
    protected $attr_3 = 40;
    // private $attr_1;
    public function show()
    {
        return $this->$attr_3;
    }
}

class User extends Demo
{
}
$a = new Demo;
echo $a->show("attr_3");
