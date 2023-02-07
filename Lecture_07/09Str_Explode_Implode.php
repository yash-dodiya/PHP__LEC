<?php

echo "<br>===================================Explore_str to array=====================================<br>";

$str="hello dodiya. how are you.";

$array=explode(" ",$str);

echo "<pre>";
print_r($array);
echo "</pre>";

$array=explode(" ",$str,0);

echo "<pre>";
print_r($array);
echo "</pre>";


echo "<br>===================================Explore_array to str=====================================<br>";

$array=array("hello","dodiya","how","are","you");

$str=implode("<br>",$array);

echo $str;
?>