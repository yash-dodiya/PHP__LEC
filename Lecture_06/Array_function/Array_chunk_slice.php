<?php

$cars=array("volvo","B.M.W","ODI","FERARI","VERNA","ALTO");

echo "<pre>";
print_r($cars);

echo "<br>========================================Array_chunk========================================<br>";

print_r(array_chunk($cars,2));

echo "<br>========================================Array_slice========================================<br>";

print_r(array_slice($cars,2));
?>