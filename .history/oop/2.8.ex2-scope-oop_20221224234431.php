<?php
class Demo
{
    public $attr_1;
    public $attr_2;

    public function show()
    {
        return $this->attr_1;
    }
}

$a = new Demo;

$a->attr_1 = 13;
echo $a->show();
