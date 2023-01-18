<?php

$con=mysqli_connect("localhost","root","","cart");

if(mysqli_connect_error())
{
    echo "connection faild";
}
else{
    echo "connection successfully:";
}


?>