<?php

  class RBI{
    Final function giveinteresttouser(){
        echo "yash:";
    }
    function giveinteresttouser1(){
        echo "dodiya";
    }
}

class BOB extends  RBI {
    public function giveinteresttouser1(){
        echo "called";
    }
}

$obj=new RBI;
$obj->giveinteresttouser();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final class</title>
</head>
<body>
    <h3>NOTES</h3>

    <ul type="squre">
        <li>BOB class can not extends final class RBI in </li>
        <li>final class can not be inherited</li>
        <li>cannot override final method rbi::giveinteresttouser</li>
        <li>cannot override finalized method</li>
</body>
</html>