<?php

echo "<br>=======================================count char=======</br>";
echo $str="hhhh A a a";
echo "<pre>";
print_r(count_chars($str));
echo "<br>=================================================Assci value============================================<br>";
print_r(count_chars($str,1));
echo "<br>================================================= All assci value print============================================<br>";

print_r(count_chars($str,1));
echo "<br>=================================================Non get value============================================<br>";

print_r(count_chars($str,3));


?>