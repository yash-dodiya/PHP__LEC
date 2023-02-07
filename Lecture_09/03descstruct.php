<?php

class constructorExample{
    public $connection="";
    public function __construct()
    {
        echo "called constructor is a methos which is a invoke by default when object are created";
        $this->connection=new mysqli("localhost","root","","cart");
        echo "<pre>";
        print_r($this->connection);
        echo "</pre>";
    }

    public function __destruct()
    {
        echo "called __destruct will be called at last";
    }
}

$object=new constructorExample;



?>