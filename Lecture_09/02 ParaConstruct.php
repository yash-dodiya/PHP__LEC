<?php

class constructorExample{
    public $connection="";
    public function __construct($dbname)
    {
        $this->connection=new mysqli("localhost","root","","$dbname");
        echo "<pre>";
        print_r($this->connection);
        echo "</pre>";
    }
}

$obj=new constructorExample("cart");
?>