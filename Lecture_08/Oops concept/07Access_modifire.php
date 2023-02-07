<?php

class base{
    protected $name;
    protected $age;

    public function __construct($n,$a){
        $this->name=$n;
        $this->age=$a;

    
    }
    public function show(){
        echo "your name is :".$this->name."<br>";
        echo "your age is :".$this->age."<br>";

    }
}
class derived extends base{
    public function get(){
        echo "your name is :".$this->name."<br>";
        echo "your age is :".$this->age."<br>";
    }
}

$obj=new derived("yash",19);
$obj->show();
?>