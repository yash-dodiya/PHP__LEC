<?php

class base{
    public $name="yashsinh<br>";

    public function calc($a,$b){
        return $a+$b;
    }
}

class derived extends base{
    public $name="yashpalsinh<br>";

    public function calc($a,$b){
        return $a*$b;
    }
}

$obj=new base();
echo $obj->name;
echo $obj->calc(10,10);


?>