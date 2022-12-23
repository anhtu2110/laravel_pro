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
$a = new User;
echo $a->show("attr_1");
