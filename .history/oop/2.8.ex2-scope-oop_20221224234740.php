<?php
class Demo
{
    public $attr_1;
    private $attr_2;

    private function show()
    {
        return $this->attr_2;
    }
}

class User extends Demo
{
}
$a = new Demo;

$a->attr_1 = 15;
echo $a->show();
