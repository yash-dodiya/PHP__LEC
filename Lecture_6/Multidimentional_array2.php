<?php

$emp=[ 
       [1,"yash","ceo",100000],
       [2,"yashpal","manager",50000],
       [3,"shakti","superwiser",40000],
       [4,"kishan","clark",30000]
     ];


echo "<br>=========================================First=============================================<br>";     
echo "<pre>";
print_r($emp);
echo "</pre>";

echo "<br>=========================================Second=============================================<br>";     

foreach ($emp as $key => $value) {
    echo $key."=".$value[2]."<br>";
}

echo "<br>=========================================Third=============================================<br>";    

for($row=0;$row<4;$row++)
{
    for($col=0;$col<4;$col++)
    {
        echo $emp[$row][$col]." ";
    }
        echo "<br>";
}

echo "<br>=========================================Forth=============================================<br>";    

foreach($emp as $r1)
{
    foreach($r1 as $r2)
    {
        echo $r2."";

    }
        echo "<br>";
}

echo "<br>=========================================Five==============================================<br>";

echo "<table border='2px' cellpadding'5px' cellspacing='2px'>";
echo "<tr>
      <th>emp id</th>
      <th>emp name</th>
      <th>designition</th>
      <th>salary</th>
      </tr>";

echo "<br>=========================================Six==============================================<br>";

foreach($emp as $r1)
{
    echo "<tr>";
foreach($r1 as $r2)
{
    echo "<td> $r2 </td>";
}
    echo "</tr>";
}
?>