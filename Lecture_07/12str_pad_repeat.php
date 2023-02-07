<?php

$str="hello";

echo "<br>==================================str_pad==================================================</br>";
$newstr=str_pad($str,10,".", STR_PAD_BOTH);

echo "<pre>";
print_r($newstr);
echo "</pre>";

echo "<br>===================================str_repeat=============================================</br>";

$newstr=str_repeat($str,5);

echo "<pre>";
print_r($newstr);
echo "</pre>";

?>