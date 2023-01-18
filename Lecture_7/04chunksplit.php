<?php

echo $mystring="this is the demo for the string is can hold alphanumberic value and symboals too like A-Z,a-z,0-9, and !@#$%^&*()";

echo "<br>=======================================chunk_split=======================================</br>";

echo chunk_split($mystring,5,"-");

$string="hello dodiya";
$search="hello";
$replace="hey";
echo '<b>'."string before replacement:".'</br></b>';
echo $string.'</br>';
$newstr=str_replace($search,$replace,$string,$count);
echo '<b>'."New replaced string is:".'</br></b>';
echo $newstr.'</br>';
echo 'Number of Replacement='.$count;

?>