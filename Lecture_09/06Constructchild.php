<?php

class constructorExample{
    public $connection="";
    public function __construct()
    { 
        echo "called construc";
    }
}

class childclass extends constructorExample{
    public function __construct()
    {
        parent::__construct();
        echo "<br>";
        echo "child construct";
    }
}
class son extends childclass{
    public function __construct()
    {
        parent::__construct();
        echo "<br>";
        echo "jay mataji";
    }
}


$obj=new son;
?>