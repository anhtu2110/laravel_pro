<?php
class Demo
{
    public $attr_1;
    protected $attr_3 = 40;
    // private $attr_1;
    public function show()
    {
        return $this->attr_1;
    }
}

class User extends Demo
{
}
$a = new Demo;
$a->attr_1 = 540;
echo $a->show();
