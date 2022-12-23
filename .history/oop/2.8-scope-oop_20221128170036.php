<?php
class Demo
{
    public $attr_1;
    private $attr_2 = 10;
    protected $attr_3 = 40;
    public function show($name)
    {
        return $this->$name;
    }
}

$a = new Demo;

$a->attr_1 = 15;
// $a->attr_2 = 10;

echo $a->show("attr_1");
echo $a->show("attr_2");
class User extends Demo
{
}
