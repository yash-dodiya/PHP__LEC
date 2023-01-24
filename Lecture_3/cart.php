<?php

require("header.php");

require("convertation.php");
$query='SELECT * FROM cart_data';
    
$run=mysqli_query($con,$query);
    


if($run->num_rows>0)
{
if(isset($_POST['remove-btn']))
{
    $id=$_POST['remove-btn'];

    $query_del='DELETE FROM cart_data WHERE  id="'.$id.'"';

    $run_cart=mysqli_query($con,$query_del);
       
    echo '<script>alert("delet cart item")</script>';
    header("location:cart.php");
}
}

 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cart</title>
    <style>
                * {
        padding: 0;
        margin: 0;
        position: relative;
        box-sizing: border-box;
        }
        .listing-section, .cart-section {
        width: 100%;
        float: left;
        padding: 1%;
        border-bottom: 0.01em solid #dddbdb;
        }

        .product {
        float: left;
        width: 23%;
        border-radius: 2%;
        margin: 1%;
        }

        .product:hover {
        box-shadow: 1.5px 1.5px 2.5px 3px rgba(0, 0, 0, 0.4);
        -webkit-box-shadow: 1.5px 1.5px 2.5px 3px rgba(0, 0, 0, 0.4);  
        -moz-box-shadow:    1.5px 1.5px 2.5px 3px rgba(0, 0, 0, 0.4);
        }

        .image-box {
        width: 100%;
        overflow: hidden;
        border-radius: 2% 2% 0 0;
        }

        .images {
        height: 15em;
        background-size: cover; 
        background-position: center center; 
        background-repeat: no-repeat;
        border-radius: 2% 2% 0 0;
        transition: all 1s ease;
        -moz-transition: all 1s ease;
        -ms-transition: all 1s ease;
        -webkit-transition: all 1s ease;
        -o-transition: all 1s ease;
        }

        .images:hover {
        transform: scale(1.2);
        overflow: hidden;
        border-radius: 2%;
        }

        / IMAGES /
        /* #image-1 {background-image: url("https://sc01.alicdn.com/kf/UT8.CaXX2NXXXagOFbXC/fresh-navel-oranges.jpg")};

        #image-2 {background-image: url("https://newenglandapples.files.wordpress.com/2014/10/img_5595.jpg")}

        #image-3 {background-image: url("https://sc01.alicdn.com/kf/UT8ovSIXQNaXXagOFbXt/Fresh-Passion-Fruit-with-Best-Price-and.jpg")}

        #image-4 {background-image: url("http://www.foodmatters.com/media/images/articles/16-powerful-reasons-to-eat-pineapple.jpg")}

        #image-5 {background-image: url("http://membrillo.com.au/wp-content/uploads/2016/11/bg-mango-01.jpg")}

        #image-6 {background-image: url("http://ell.h-cdn.co/assets/16/27/980x490/landscape-1467750721-gettyimages-146896572.jpg")}

        #image-7 {background-image: url("http://www.hesca.org/wp-content/uploads/2016/08/banana.jpg")}

        #image-8 {background-image: url("http://www.baag.com.au/pictures/produce/plums2.jpg")} */


        .text-box {
        width: 100%;
        float: left;
        border: 0.01em solid #dddbdb;
        border-radius: 0 0 2% 2%;
        padding: 1em;
        }

        h2, h3 {
        float: left;
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
        font-size: 1em;
        text-transform: uppercase;
        margin: 0.2em auto;
        }

        .item, .price {
        clear: left;
        width: 100%;
        text-align: center;
        }

        .price {
        color: Grey;
        }

        .description, label, button, input {
        float: left;
        clear: left;
        width: 100%;
        font-family: 'Roboto', sans-serif;
        font-weight: 300;
        font-size: 1em;
        text-align: center;
        margin: 0.2em auto;
        }

        input:focus {
        outline-color: #fdf;
        }

        label {
        width: 60%;
        }

        .text-box input {
        width: 15%;
        clear: none;
        }

        .text-box button {
        margin-top: 1em;
        }

        button {
        padding: 2%;
        background-color: #dfd;
        border: none;
        border-radius: 2%;
        }

        button:hover {
        bottom: 0.1em;
        }

        button:focus {
        outline: 0;
        }

        button:active {
        bottom: 0;
        background-color: #fdf;
        }

        .table-heading, .table-content {
        width: 75%;
        margin: 1% 12.25%;
        float: left;
        background-color: #375a7f;
        }

        .table-heading h2 {
        padding: 1%;
        margin: 0;
        text-align: center;
        }

        .cart-product {
        width: 50%;
        float: left;
        }

        .cart-price {
        width: 15%;
        float: left;
        }

        .cart-quantity {
        width: 10%;
        float: left;
        }

        .cart-total {
        width: 25%;
        float: left;
        }

        .cart-image-box {
        width: 20%;
        overflow: hidden;
        border-radius: 2%;
        float: left;
        margin: 1%;
        }

        .cart-images {
        height: 7em;
        background-size: cover; 
        background-position: center center; 
        background-repeat: no-repeat;
        }

        .cart-item {
        width: 20%;
        float: left;
        margin: 3.2em 1%;
        text-align: center;
        }
        .cart-description {
        width: 53%;
        float: left;
        margin: 3.2em 1%;
        font-family: 'Roboto', sans-serif;
        font-weight: 300;
        font-size: 1em;
        text-align: center;
        }

        .cart-price h3, .cart-total h3 {
        margin: 3.2em 5% 3.2em 20%;
        width: 60%;
        color:white;
        }

        .cart-quantity input {
        margin: 3.2em 1%;
        border: none;
        }

        .remove {
        width: 10%;
        margin: 1px;
        float: right;
        clear: right;
        background-color:#627f9d;
        }

        .coupon {
        width: 20%;
        background-color: #375a7f;
        margin: 1% 1% 1% 12.25%;
        float: left;
        height: 6em;
        }

        .coupon input {
        width: 60%;
        border: none;
        margin: 12.75% 5%;
        padding: 1%;
        }

        .coupon button {
        width: 25%;
        float: left;
        clear: right;
        margin: 12% 5% 12% 0;
        background-color:#627f9d;
        }

        .keep-shopping {
        width: 15%;
        height: 6em;
        float: left;
        margin: 1% auto;
        padding: 1%;
        background-color: #375a7f;
        }

        .keep-shopping button {
        text-transform: uppercase;
    
        background-color:#627f9d;
        margin: 12% auto;
        
        }

        .checkout {
        width: 37.25%;
        margin: 1% 12.75% 1% 1%;
        float: right;
        background-color: #375a7f;
        height: 6em;
        }

        .checkout button {
        width: 30%;
        clear: none;
        background-color:#627f9d;
        margin: 5.4% 0 5.4% 5.5%;
        text-transform: uppercase;
        }

        .final-cart-total {
        width: 15%;
        float: right;
        margin: 7%;
        background-color: #627f9d;
        }

        .final-cart-total h3 {
        color: Black;
        }  
    </style>
</head>
<body>

    <div class="cart-section">   
            <div class="table-heading">
                <h2 class="cart-product">Product</h2>
                <h2 class="cart-price">Price</h2>
                <h2 class="cart-quantity">Quantity</h2>
                <h2 class="cart-total">Total</h2>
            </div>

         
            <?php

            // if(isset($_SESSION['cartdata'])){
            

            // foreach($_SESSION['cartdata'] as $value) 
            // {   $id=$value['item-id'];

                if($run->num_rows>0)
                {
                   while($row=$run->fetch_assoc())
                   {
                       $id=$row['id'];
                

                ?>
            <div class="table-content">
                <div class="cart-product">  
                <div class="cart-image-box">
                    <div class="cart-images" id="image-3">
                        <img src='<?php echo $row['img']; ?>' style=' width:100px;height:100px'>
                       
                    </div>
                </div>
                <h2 class="cart-item"><?php echo $row['NAME']; ?></h2>
                <p class="cart-description"><?php echo $row['des']; ?></p>
                </div>
                <div class="cart-price">
                <h3 class="cart-price"><?php echo $row['price']; ?></h3>
                </div>
                <div class="cart-quantity">
                <input type="text" name="cart-1-quantity" id="cart-1-quantity" value='<?php echo $row['quantity']; ?>'> 
                </div>
                <div class="cart-total">
                <h3 class="price">$4.99</h3>

                <form method="post">
                <button type="submit" class="remove" name="remove-btn" value='<?php echo $id; ?>' id="remove-btn">x</button>
            </form>
                </div>
            </div>
                <?php }
                   } ?>
                    

