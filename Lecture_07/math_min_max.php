<?php

echo "<br>===============================Min_values=================================================</br>";

$value=min(123,43,657,45,345);

echo $value;

/*-----------Array_min_value-----------------------*/

$value=min(array(12,23,43,2),array(12,24,23,4));
echo "<pre>";
print_r($value);
echo "</pre>";

echo "<br>=============================Max_values====================================================</br>";
$value=max(23,43,45,799,544);
echo $value;


/*------------Array_max_value----------------------*/

$value=max(array(23,34,56,78),array(98,87,76,65));
echo "<pre>";
print_r($value);
echo "</pre>";


?>