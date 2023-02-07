<?php

trait Hello{
    public function sayhello(){
        echo "hello everyone --->";
    } 
    public function sayhii(){
        echo "hey hello<br>";
    }
}
trait hy{
    public function sayaske(){
        echo "what is your name --->";
    }
    public function saysome(){
        echo "my name is yash<br>";
    }
}
class base{
    use Hello,hy;
}
$obj=new base();
$obj->sayhello();
$obj->sayhii();
$obj->sayaske();
$obj->saysome();


?>