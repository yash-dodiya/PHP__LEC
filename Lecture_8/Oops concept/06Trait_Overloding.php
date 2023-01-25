
<?php
trait Hello{
    private function sayhello(){

        echo "<h3>hello how are you:</h3>";
    }
}

echo "<br>========================================same name to function==================================================</br>";
class base{
    use Hello;
    public function sayhello(){
        echo "hello";
    }
}

echo "<br>============================================private to convert public=========================================</br>";
class yash{
    use Hello
    {
        Hello::sayhello as public;
    }
    //     Hello::sayhello as public;
    // }
     
}
$obj=new yash;
$obj->sayhello();




?>