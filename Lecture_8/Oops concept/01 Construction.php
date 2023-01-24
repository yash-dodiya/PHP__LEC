<?php

class person
{
    public $name,$age;

    function __construct($name="yashsinh",$age=20)
    {
        $this->name=$name;
        $this->age=$age;
    }
    function show()
    {
        echo $this->name."--".$this->age."\n";
    }
}
// $obj=new person("yash",20);
$obj=new person();
$obj->show();


?>