<?php

// $a=5;
// $a=10;
// $a=20;

// echo "<pre>";
// print_r($a);
// echo "</pre>";

$fname=array("a"=>"yash","ab"=>20);
$age=array("a"=>"milan","ab"=>"ravi");

// echo "<pre>";
// print_r($fname);
// print_r($age);
// echo "</pre>";

// $new1=array_combine($fname,$age);

// print_r($new1);

$new1=array_merge($fname,$age); 

print_r($new1);