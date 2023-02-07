<?php
//for(int; endind/temination;incr/dec)

// Entry contro statment looping start
for ($i=0; $i <10 ; $i++)
{ 
  echo  "<br> for loop:$i";     
}

$a=0;

//generally use for bulding array
while ($a < 10) 
{
    echo "<br> while loop:$a";
    $a++;
}

//for accesing an array
$variable=array("yash",true,123,253.53);
$variableAssocarray=array("username"=>"test","password"=>"123","gender"=>"male","rank"=>1);
for ($i=0; $i <count($variable); $i++) 
{ 
    echo "<br> $variable[$i]";
}

foreach($variable as $key =>$value)
{
    echo "<br> key is $key=>value is $value";
}
foreach($variableAssocarray as $key=>$value)
{
    echo "<br> key is$key=>value is $value";
}

//entry control looping statement END
$a_for_do_while=0;
do
{
    echo "<br> do while variable data".$a_for_do_while;
    $a_for_do_while++;
}
while($a_for_do_while<=10);

?>