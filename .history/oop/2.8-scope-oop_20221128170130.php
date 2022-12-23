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

class User extends Demo
{
    function __construct()
    {
        $this->attr_3;
    }
}
