<?php

Abstract class RBI{

    Abstract function giveinteresttouser();
}
interface custominterface{
    function giveinteresttouser();
    // public function yash(){
    //     echo "hey";
    // }
}
    class BOB extends RBI implements custominterface{
        function giveinteresttouser(){
            echo "yash dodiya";
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
    <title>interfaces</title>
</head>
<body>
    <h3> NOTES </h3>
    <ul type="squre">
        <li>interfaces are 100% Abstract</li>
</body>
</html>