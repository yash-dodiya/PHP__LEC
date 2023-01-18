<?php 
include("header.php");
if(isset($_SESSION['cartdata'])){

    echo "<pre>";
    print_r($_SESSION['cartdata']);
    echo "</pre>";  
}
    ?>
