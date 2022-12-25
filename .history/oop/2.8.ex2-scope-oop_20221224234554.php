<?php
class Demo
{
    public $attr_1;
    private $attr_2;

    private function show()
    {
        return $this->attr_1;
    }
}

$a = new Demo;

$a->attr_1 = 13;
echo $a->show();
