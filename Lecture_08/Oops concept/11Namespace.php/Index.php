<?php


require 'product.php';
require 'testing.php';

function wow(){
    echo "wow from indexfile";
}

use test as cmd;
$obj=new cmd\product();
$obj1=new cmd\product();


?>