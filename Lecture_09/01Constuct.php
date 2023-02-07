<?php


class constructorExample{
    public $connection="";
    public function __construct(){

        echo "called__construct is a method which is invoked by default when objects are created";
        $this->connection=new mysqli("localhost","root","","cart");
        echo "<pre>";
        print_r($this->connection);
    }

}

$object=new constructorExample;