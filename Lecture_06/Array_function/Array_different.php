<?php

$a1=array("a"=>"red","b"=>"blue","c"=>"green","d"=>"pink","e"=>"yash");
$a2=array("a"=>"red","b"=>"blue","c"=>"green","d"=>"pink","e"=>"yashpal");

echo "<pre>";
print_r(array_diff_assoc($a1,$a2));

echo "<br>===================================Key different==========================================<br>";
print_r(array_diff_key($a1,$a2));

echo "</pre>";
?>