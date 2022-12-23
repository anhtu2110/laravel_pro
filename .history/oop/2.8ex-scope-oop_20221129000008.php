<?php
class Demo
{
    public $attr_1;
    protected $attr_3 = 40;
    // private $attr_1;
    public function show($name)
    {
        return $this->$$name;
    }
}

class User extends Demo
{
}
$a = new Demo;
echo $a->show("attr_3");
