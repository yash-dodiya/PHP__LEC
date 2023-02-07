<?php

$str="the mean of <b>bold</b>";
$str1='<a href="https://www.tops-int.com">Go to Tops Technology</a></br>';
$newstr= htmlspecialchars($str1,ENT_QUOTES);

$htmlent=htmlspecialchars($str);

echo $htmlent;
echo "<pre>";
print_r($newstr);
echo "</pre>";
?>