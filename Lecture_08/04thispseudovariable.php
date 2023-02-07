<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pseudo</title>
</head>
<body>
    <p>$this is a pseudo variable for access object properties inside class</p>
    <p>$this poits itself</p>
    <p>the psedo variable $tghis is available when a method is called from within an object context.
        $this is the value of the calling a non-static.</p>

    <?php

    class Books{
        public $Author="chetan bhagat";
        function Threeidiotprice()
        {
            return 500000000;
        }
        function Threeidiots()
        {
            return "Story of Threeidots".$this->Author."price is".$this->Threeidiotprice();
        }
        function Twostates()
        {
            return "story of Twostates".$this->Author;
        }
    }

    $classobject=new Books;
    echo "<br>";
    echo $classobject->Threeidiots();
    echo "<br>";
    echo $classobject->Twostates();
    ?>
</body>
</html>