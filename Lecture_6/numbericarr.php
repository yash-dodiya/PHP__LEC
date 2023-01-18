<?php

$MarksMaths=40;
$MarksEng  =50;
$MarksGuj  =60;
$Markscom  =70;

echo "<h2> Numberic Index Array</h2>";

echo"<br>=============================first=============================</br>";

$Marks_Square_brack =[40,50,60,70];

echo "<pre>";
print_r($Marks_Square_brack);
echo "</pre>";
print_r(count($Marks_Square_brack) );

echo"<br>=============================second=============================</br>";

echo "<h3>Access Array Element By Index</h3>";
echo $Marks_Square_brack[0]."<br>";
echo $Marks_Square_brack[1]."<br>";
echo $Marks_Square_brack[2]."<br>";
echo $Marks_Square_brack[3]."<br>";

echo"<br>=============================third=============================</br>";
for($i=0;$i<count($Marks_Square_brack);$i++)
{
    echo $Marks_Square_brack[$i]."<br>";
}




?>