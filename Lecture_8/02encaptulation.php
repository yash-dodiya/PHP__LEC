
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>encapsulation is wrapping data into single unit its done through class</p>
    <p>class is an example of encapsulation</p> 
    <p>without instance/object of class we cant access any property of class out side</p>
    <p>with the help of new keyword we can create an object of any class</p>
    <p>class is a collection of datamember and member function only</p>
  
</body>
</html>
<?php


    // $a=40;
    // $b=40;
    // $sum=$a+$b; 5000 line code
    // $sum=$a+$b; 5000 line code
    // $sum=$a+$b; 5000 line code
    // $sum=$a+$b; 5000 line code
    // $sum=$a+$b; 5000 line code
    // $sum=$a+$b; 5000 line code

    /* user define function udf start */
    // function Addition()
    // {
    //     $a=40;
    //     $b=40;
    //     return $a+$b;
    // }
    /* user define function end */
    // echo Addition(); 1 line code
    // echo Addition(); 1 line code
    // echo Addition(); 1 line code
    // echo Addition(); 1 line code
    // echo Addition(); 1 line code

    /*dynemic user define function start */
    function Addition($a,$b)
    {
        $a=40;
        $b=40;
        return $a+$b; //5000 line code
    }
    /* dynemic user define function end */
    echo "<br>".Addition(50,60);  //1 line code passing the argument to the function
    echo "<br>".Addition(20,62);  //1 line code passing the argument to the function
    echo "<br>".Addition(45,56);  //1 line code passing the argument to the function
    echo "<br>".Addition(47,65);  //1 line code passing the argument to the function
    echo "<br>".Addition(85,49);  //1 line code passing the argument to the function
 
     class Mathop{
        function Addition($a,$b)
        {
            return $a+$b;
        }
     }
    echo "<br>===============================object print===================================<br>";
    $mathopob=new Mathop;
    echo $mathopob->Addition(50,60);
?>