<?php

class yash{
    public $name="yash";
    public $age=19;

    function __construct()
    {
        $this->name;
        $this->age;
    }

    function info()
    {
        echo "yash is  :".$this->name."<br>";
        echo "yash is  :".$this->age."<br>";
    }
}
class yashpal extends yash{
    public $email="yashpal@gmail.com";
    public $phone=2154873698;

    function info()            
    {
        echo"yashpal email  :".$this->email."<br>";
        echo"yashpal phone   :".$this->phone."<br>";

    }
}
$obj1 = new yash("jay mataji",100);
$obj2 = new yashpal("shakti@gmail.com",500000000000 );
$obj1->info();
$obj2->info();
?>