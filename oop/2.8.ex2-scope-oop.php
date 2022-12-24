<?php

use User as GlobalUser;

class Demo
{
    public $attr_1 = 15;
    private $attr_2 = 20;
    protected $attr_3 = 60;
    public function show()
    {
        return $this->attr_2;
    }
}

class User extends Demo
{
    function __construct()
    {
        echo $this->attr_1;
    }
}

$u = new User;
$u->attr_3 = 30;
