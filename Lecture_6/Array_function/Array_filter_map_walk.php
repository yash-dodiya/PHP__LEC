<?php

echo"<br>==========================================Filter Array=======================================</br>";

function test_odd($var)
  {
  return($var & 1);
  }
$a1=array(1,3,2,3,4);
print_r(array_filter($a1,"test_odd"));

$arr=array(100,200,300,400);
echo "<pre>";
print_r($arr);
echo "</pre>";

foreach($arr as $key=>$value)
{
    echo $key."=".$value."<br>";
}
echo"<br>==========================================Filter Array=======================================</br>";


function Accessarrayusefilter($arRec)
{
    return $arRec+5;
}

$arr_filter=array_filter($arr,"Accessarrayusefilter");

echo "<pre>";
echo "filter res<br>";
print_r($arr_filter);
echo "<br>===================================Map Array===============================================</br>";

function AccessArrayUseMap($arRec)
{
    return $arRec+5;
}

$arrMapRes=array_map("AccessArrayUseMap",$arr);
echo "Map Rec<br>";
print_r($arrMapRes);

echo "<br>=====================================Walk Array=============================================<br>";

function AccessArrayUseWalk($arRec,$arrd)
{
    $added5=$arRec+5;
    echo "value: ".$added5."key: ".$arrd."<br>";
        return $arRec+5;
    
}

$arrWalkRes = array_walk($arr,"AccessArrayUseWalk");
print_r($arr);
print_r($arrWalkRes);

echo "<br>=====================================Walk Array=============================================<br>";

function myfunction($value,$key)
{
    echo "$key:"."$value<br>";
}

array_walk($arr,"myfunction");
// print_r($new1);
?>