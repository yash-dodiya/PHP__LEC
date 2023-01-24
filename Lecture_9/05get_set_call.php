<?php

class Magicpoly{
    public function __get($data)
    {
        echo $data;
    }
    public function __set($var,$val)
    {
        echo "variable is $var and value is $val";
    }
    public function __call($funcname,$data)
    {
        echo "<pre>";
        echo $funcname;
        print_r($data);
    }
}
$Magicpoly=new Magicpoly;

// $magicpoly->username;
// $magicpoly->password;
// $magicpoly->username="yash";
// $magicpoly->password="123";

$Magicpoly->getdata("users","mobile number");
$Magicpoly->getdata("username","password","email");
?>