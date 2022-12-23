<?php
class Demo
{
    public $attr_1;
    // private $attr_1;
    public function show()
    {
        return $this->attr_1;
    }
}
$a = new Demo;
$a->attr_1 = 50;
echo $a->show();
