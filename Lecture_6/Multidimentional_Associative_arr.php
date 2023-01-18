<?php
$marks=[ 
        "kishan"=>[
            "physics"=>85,
            "maths"=>80,
            "chemestry"=>60
                            ],
         "ram"=>[
            "physics"=>69,
            "maths"=>74,
            "chemestry"=>80
         ],
        "shyam"=>[
            "physics"=>64,
            "maths"=>80,
            "chemestry"=>70
                            ]
        ];

echo "<br>========================================First======================================================<br>";


    // echo "<pre>";
    // print_r($marks);
    // echo "</pre>";

echo "<br>========================================Second======================================================<br>";

// foreach ($marks as $key => $value) {
//     echo $key."<br>";         // outer side 
// }

echo "<br>========================================Third======================================================<br>";

// foreach($marks as $key=>$v1)
// {
//     echo $key."<br>";
//     foreach($v1 as $v2)
//     {
//         echo $v2."<br>";

//     }
//     echo "<br>";
// }

echo "<br>========================================Four======================================================<br>";

echo "<table border='2px' cellpading='2px' cellspacing='2px'>

<tr>
     <th>Student marks</th>
     <th>Physics</th>
     <th>Maths</th>
     <th>chemestry</th>
</tr>";

foreach($marks as $key=>$v1)
{
    echo "<tr>
            <td>$key</td>";
    foreach($v1 as $v2)
    {
        echo "<td> $v2 </td>";
    }
    echo "</tr>";

}
    echo "</table>";


?>