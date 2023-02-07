<?php

echo "<br>=======================================Fill array===========================================</br>";
$a1=array_fill(10,4,"test");
echo "<pre>";
print_r ($a1);



$a1=array_fill(3,4,"blue");
print_r($a1);

echo "<br>=======================================Pad array==========================================</br>";
$arr=["yash","dodiya"];
$new1=array_pad($arr,4,"red");
print_r($new1);


?>