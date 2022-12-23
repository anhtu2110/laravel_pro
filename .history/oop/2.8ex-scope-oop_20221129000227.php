<?php
class Demo
{
    public $attr_1;
    protected $attr_3 = 80;
    // private $attr_1;
    public function show($name)
    {
        return $this->$name;
    }
}

class User extends Demo
{
}
$a = new Demo;
$a->attr_3 = 50;
echo $a->show("attr_3");
