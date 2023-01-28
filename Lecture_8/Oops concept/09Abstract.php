<?php

// Abstract class parentclass{
//     public $name;

//     Abstract public function calc($a,$b);


//     public function show(){
//         echo "yash";
//     }
// }
// class child extends parentclass{
//     public function calc($a,$b){
//         // echo $a+$b;
//         echo "hello yashpal";
//     }
// }

// $obj=new child;
// $obj->calc(1,1);
// $obj->show();

abstract class RBI{
    Abstract function giveinteresttouser();
    Abstract function giveinteresttouser1();
    
    function  giveinteresttouserabc(){
        echo "yash<br>";
    }
}

    class BOB extends RBI{
         function giveinteresttouser(){
            echo "yash dodiya<br>";
        }
        function giveinteresttouser1(){
            echo "yash - dodiya<br>";
        }



        
    }
$obj=new BOB;
$obj->giveinteresttouserabc();
$obj->giveinteresttouser();
$obj->giveinteresttouser1();
?>