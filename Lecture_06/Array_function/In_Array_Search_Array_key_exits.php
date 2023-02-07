<?php

$a=array("volvo"=>"xd88","bmw"=>"x5");

echo "<pre>";
print_r($a);

echo "<br>===================================In_array=========================================</br>";

echo "<pre>";
print_r(in_array("x5",$a));


if(in_array("xd88",$a))
{
    echo "= Match Array!";
}
else{
    echo "= does't match array!";
}

echo "<br>===================================Search=========================================</br>";

echo "<pre>";
print_r(array_search("x5",$a));

// if(array_search("x5",$a))
// {
//     echo "serch found:";
// }
// else
// {
//     echo "not search found:";
// }



echo "<br>===================================Key_exits=========================================</br>";
if(array_key_exists("volvo",$a))
{
    echo " = key exits!";
}
else{
    echo "key does't exits!";
}

?>