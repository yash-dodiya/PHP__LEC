<?php


Abstract class RBI{
    Abstract function giveinteresttouser();

    Abstract function giveinteresttouser1();

    public function giveinteresttouserABC(){
        echo "yash:";
    }
}
    class BOB extends RBI{
       public function giveinteresttouser(){
            echo "hello users:";
        }

        public function giveinteresttouser1(){
            echo "hey hello:";
        }
}
$obj=new BOB;
$obj->giveinteresttouser();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract method</title>
</head>
<body>
    <h3> NOTES </h3>
    <ul type="squre">
    <li>Abtsract method can not contain body while declaration</li>
    <li>Abstract class only contain Abstracted methods</li>
    <li>can not instantiate abstract class</li>
    <li>class bob contain 1 Abstract method and must there for be declared Abstract or
        implement the remaining method</li>
</ul>
</body>
</html>


