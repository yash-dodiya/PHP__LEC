<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>multiple values in single variable</p>
    <p>store data by indexing key => value pair </p>
    <ul>
        <li>Numeric => key only numbers</li>
        <li>Associative => key user definded alspha+num</li>
        <li>Multi-dimensional => array within array</li>
    </ul>
    <?php
    $marksMaths = 50;
    $marksEng = 70;
    $marksGuj = 80;
    $marksComp = 90;

    echo "<h2>Numeric/index Array</h2>";
    $Marks_square_brack = [50,60,80,90];
    // echo $Marks_square_brack; //Array to string conversion in
    echo "<pre>";
    print_r($Marks_square_brack);
    echo "</pre>";
    print_r(count($Marks_square_brack) );
    
    echo "<h3>Access Array ele by index</h3>";
    echo $Marks_square_brack[0]."<br>";
    echo $Marks_square_brack[1]."<br>";
    echo $Marks_square_brack[2]."<br>";
    echo $Marks_square_brack[3]."<br>";
    echo "<h3>Access Array ele by loop</h3>";
    for ($i=0; $i < count($Marks_square_brack); $i++) { 
        echo $Marks_square_brack[$i]."<br>";
    }
    $Marks_array_func = array(50,60,80,90);
    
    echo "<h2>Associative Array</h2>";
    $Marks_assoc_array = array("Maths"=>90,"Eng"=>60,"Guj"=>80,"Comp"=>90);
    echo "<pre>";
    print_r($Marks_assoc_array);
    echo "</pre>";
    echo "<h3>Access Associative Array ele by index</h3>";
    echo $Marks_assoc_array['Maths']."<br>";
    echo $Marks_assoc_array['Eng']."<br>";
    echo $Marks_assoc_array['Guj']."<br>";
    echo $Marks_assoc_array["Comp"]."<br>";
    echo "<h3>Access Associative Array ele by loop</h3>";
    // for ($i=0; $i < count($Marks_assoc_array); $i++) { 
    //     echo $Marks_assoc_array[$i]."<br>";
    // }
    foreach ($Marks_assoc_array as $key => $value) {
            echo "$key => $value<br>";
        
    }


    $Marks_assoc_arrayOp = array("Maths"=>90,"80","Eng"=>60,"Guj"=>80,"Comp"=>90,"99",500=>"data","key");
    echo "<pre>";
    print_r($Marks_assoc_arrayOp);
    echo "</pre>";
    
   
    $MultiDimensionalArray =  array("Aone-School"=>array("10th"=>array( "abc"=>array("Maths"=>90,"Eng"=>65,"Guj"=>80,"Comp"=>90),
    "xyz"=>array("Maths"=>80,"Eng"=>45,"Guj"=>65,"Comp"=>90),
    "psq"=>array("Maths"=>98,"Eng"=>70,"Guj"=>88,"Comp"=>90),
    "pqrd"=>array("Maths"=>70,"Eng"=>65,"Guj"=>80,"Comp"=>90)),"11th"=>array( "abc"=>array("Maths"=>90,"Eng"=>65,"Gsuj"=>80,"Comp"=>90),
    "xfyz"=>array("Maths"=>80,"Eng"=>45,"Guj"=>65,"Comp"=>90),
    "pfq"=>array("Maths"=>98,"Eng"=>70,"Guj"=>88,"Comp"=>90),
    "pqrd"=>array("Maths"=>70,"Eng"=>65,"Guj"=>80,"Comp"=>90)),"12th"=>array( "abc"=>array("Maths"=>90,"Eng"=>65,"Gduj"=>80,"Comp"=>90),
    "xyez"=>array("Maths"=>80,"Eng"=>45,"Guj"=>65,"Comp"=>90),
    "pqq"=>array("Maths"=>98,"Eng"=>70,"Guj"=>88,"Comp"=>90),
    "pqrbd"=>array("Maths"=>70,"Eng"=>65,"Guj"=>80,"Comp"=>90)))) ;
    echo "<pre>";
    print_r($MultiDimensionalArray);
    print_r($MultiDimensionalArray['Aone-School']);
    print_r($MultiDimensionalArray['Aone-School']['10th']['xyz']);
    print_r($MultiDimensionalArray['Aone-School']['10th']['xyz']['Maths']);
    echo "</pre>";
    foreach ($MultiDimensionalArray['Aone-School']['10th'] as $key => $value) {
        // print_r($value["Maths"]);
        echo "$key => Maths Marks is ".$value['Maths']."<br>";
    
}

    ?>
</body>
</html>