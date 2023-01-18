<?php

echo $mystring="this is the demo for the string is can hold alphanumberic value and symbol tio like A-Z,a-z,0-9 and !@#$%^&*()";

$str=bin2hex($mystring);
echo "<br>";
echo ($str);
echo "<br>";
$newstring="a";
echo bin2hex("a");
?>