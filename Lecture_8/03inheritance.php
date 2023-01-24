7468<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <p>Access parent properties to child is called inheritance</p>
     <img src="inheritance.jpg" alt="" width="500px">

     <?php

     
     class Mathop{
        function Addition($a,$b)
        {
            return $a+$b;
        }
     }
     class AdvMathop extends Mathop{
        function average($koipan,$kuchbhi)
        {
            $sum=$this->Addition($koipan,$kuchbhi);
            return $sum/2;
        }
     }
     $mathopob=new AdvMathop;
     echo "<br>";
     echo "Addition is".$mathopob->Addition(40,60);
     echo "</br>";
     echo "Average is".$mathopob->average(50,50);
     echo "<br>";
     ?>
</body>
</html>