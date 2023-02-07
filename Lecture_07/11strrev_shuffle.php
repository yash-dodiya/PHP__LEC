<?php

$str="hello dodiya yashsinh";

echo "<br>=============================str rev======================================================</br>";
$newstr=strrev($str);

echo "<pre>";
print_r($newstr);
echo "</pre>";

echo "<br>==============================shuffle str================================================</br>";

$newstr=str_shuffle($str);

echo "<pre>";
print_r($newstr);
echo "</pre>";
?>