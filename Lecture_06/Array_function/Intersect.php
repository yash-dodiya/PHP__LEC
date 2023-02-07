<?php



$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue","a");
echo "<pre>";
$result=array_intersect_key($a1,$a2);
print_r($result);

echo "<br>===================================array_Interest_Assoc================================</br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue");

$new1=array_Intersect_Assoc($a1,$a2);
print_r($new1);

echo "<br>===================================array_Interest_key================================</br>";

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"gray","d"=>"pink");
$new1=array_intersect_key($a1,$a2);
print_r($new1);

echo "<br>====================================Array_intersect_uassoc=============================</br>";
function myfunction($a,$b)
{
    if($a===$b)
    {
        return 0;
    }
        return($a>$b)?1:-1;
}


$a1=array("a"=>"red","b"=>"blue","c"=>"green");
$a2=array("a"=>"red","b"=>"blue","c"=>"green");

$new1=array_intersect_uassoc($a1,$a2,"myfunction");
print_r($new1);

echo "<br>=======================================Array_uassoc_key====================================<br>";

function myfunctionukey($a1,$a2)
{
    if($a1===$a2)
    {
        return 0;
    }
        return($a1>$a2)?1:-1;
}


$a1=array("a"=>"red","b"=>"blue","c"=>"blue");
$a2=array("a"=>"green","d"=>"gray","e"=>"blue");

$new1=array_intersect_ukey($a1,$a2,"myfunctionukey");
print_r($new1);
?>