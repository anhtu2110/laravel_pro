<?php
class Demo
{
    public $attr_1;
    private $attr_2 = 10;
    protected $attr_3 = 60;
    public function show($name)
    {
        return $this->$name;
    }
}

class User extends Demo
{
    function __construct()
    {
        echo $this->attr_3;
    }
}
new User;
