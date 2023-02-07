<?php

$a=40;
$b=50;
$c=60;
$d=70;

echo "<h2>Associative array</h2>";
$Associative=array("a"=>40,"b"=>50,"c"=>60,"d"=>70);

echo "<br>===============================================first_Asso============================<br>";

echo "<pre>";
print_r($Associative);
echo "</pre>";

echo "<br>===============================================second_Asso============================<br>";

echo "<h3>Access Associative array ele by Index</h3>";

echo $Associative['a']."<br>";
echo $Associative['b']."<br>";
echo $Associative['c']."<br>";
echo $Associative['d']."<br>";

echo "<br>===============================================Third_Asso==============================<br>";

echo "<h3>Access Associative array ele by loop<h3>";

// for($i=0;$i<count($Associative);$i++)
// {
//     echo $Associative[$i]."<br>";
// }

foreach ($Associative as $key => $value) {

      echo "$key=>$value<br>";
    }

echo "<br>===============================================Forth_Asso==============================<br>";

  $Associative=array("a"=>40,"10","b"=>50,"c"=>60,"d"=>70,"20",);
  echo "<pre";
  print_r($Associative);
  echo "</pre>";
?>