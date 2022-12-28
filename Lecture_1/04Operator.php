<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     .class{
        color:red !important;
     }
    </style>
</head>
<body>
    <ol>
        <li>Arithemetic operators</li>
        <li>Logical or Relational Operators</li>
        <li>Comparison operators</li>
        <li>Conditional and Ternry Operators</li>
        <li>Assignment Operators</li>
        <li>Spaceship Operators (introduced in php 7)</li>
        <li>Array Operators</li>
        <li>Increment/Decrement Oprators</li>
        <li>string Operators</li>

    </ol>
    <img src="PHP-operators-types.png" alt="">
    <!-- <img src="arthmatic.png" alt="">
    <img src="comparesion.png" width="100%" alt=""> -->
    </body>
    </html>


    <?php
    $a = 50; 
    echo $a +=50; // $a = $a + 50;

    $fname = "Test";
    $lname = "Xyz";
    echo "Full name".$fname." ".$lname;  //two tring concat 
    // echo $a;
    echo 10==10.00;
    echo "<br>=========== spaceship START========== <br>";
    echo 8<=10;
    echo "<br>=========== spaceship END========== <br>";
    ?>
