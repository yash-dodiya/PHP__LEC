<?php

$str="the mean of yd";
$str1="hello student  fgfgfg";

echo "<br>=========================================Strlength========================================</br>";
echo strlen($str)."<br>";

echo "<br>=========================================Stringtoupper========================================</br>";
echo strtoupper($str)."<br>";

echo "<br>=========================================Strtolower========================================</br>";
echo strtolower($str)."<br>";

echo "<br>=========================================Ucfirst========================================</br>";
echo ucfirst($str1)."<br>";

echo "<br>=========================================Ucwords========================================</br>";
echo ucwords($str1)."<br>";

echo "<br>=========================================trim========================================</br>";   
echo trim($str)."<br>";

echo "<br>=========================================Rtrim========================================</br>";
echo "this is the rtrim:" .rtrim($str1,'student')."<br>";

echo "<br>=========================================Ltrim========================================</br>";
echo "this is the ltrim:" .ltrim($str1,'student')."<br>";





// echo "<a href='google.com'>google</a><br></br>";

echo $strhtml='&lt;a href=&quot;https://www.tops-int.com&quot;&gt;tops.com&lt;/a&gt;';
echo html_entity_decode($strhtml)."<br>";
echo "this is the output:" .$strhtmlent= '<a href="https://www.tops-int.com">Go to Tops Technology</a></br>';
$str="this is some <b>bold</b> text.";
echo htmlspecialchars($strhtmlent);


?>