<?php 



    include("header.php");
    require_once("convertation.php");

    $query='SELECT * FROM product';
    
    $run=mysqli_query($con,$query);
    
    if(isset($_SESSION['userdata']['username']))
            {
                  if(isset($_POST['sub-btn']))
                  {
                        if($_SESSION['userdata']['username']=="dodiya yash" && $_SESSION['userdata']['password']=="1234")
                        {
                              $id=$_POST['sub-btn'];

                              $username=$_SESSION['userdata']['username'];
                              $user_password=$_SESSION['userdata']['password'];
                            
                              $name=$_POST['item-name-'.$id];
                              $des=$_POST['item-des-'.$id];
                              $price=$_POST['item-price-'.$id];
                              $img=$_POST['item-img-'.$id];
                              $que=$_POST['item-quantity-'.$id];
  
                              $query_cart='INSERT INTO cart_data(id,username,PASSWORD,NAME,des,price,img,quantity)
                              VALUES  ("'.$id.'","'.$username.'","'.$user_password.'","'.$name.'","'.$des.'","'.$price.'","'.$img.'","'.$que.'")';
                              
                              $run_cart=mysqli_query($con, $query_cart);

                              // echo "succssfully";

                             
                    
                              echo '<script>alert("add to cart dATA");</script>';                                
                        }
                        else{
                              echo '<script>alert("pplse firt login");</script>';
                        }
                  }
              }
            
?>
<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="home.css">
      </head>
      <body>


            
      <div class="listing-section">
            <?php 
            
                  if($run->num_rows>0)
                  {
                     while($row=$run->fetch_assoc())
                     {
                         $id=$row['id'];
            ?>
                        <div class="product">
                              <div class="image-box">
                                    <div class="images" id="image-1">
                                          <img src='<?php echo $row['img']; ?>' style="height: 300;width: 350;">
                                    </div>
                              </div>
                              <div class="text-box">
                                    <h2 class="item"><?php echo $row['NAME']; ?></h2>
                                    <h3 class="price"><?php echo $row['price']; ?></h3>
                                    <p class="description"><?php echo $row['des'] ;?></p>
                                    
                                    <form method="post">
                                          <label for="item-1-quantity">Quantity:</label>

                                          <input type="hidden" name="item-id-<?php echo $id;?>" id="item-id" value="<?php echo $id?>">
                                          <input type="hidden" name="item-img-<?php echo $id;?>" id="item-img" value="<?php echo $row['img'];?>" >
                                          <input type="hidden" name="item-name-<?php echo $id;?>" id="item-name" value="<?php  echo $row['NAME']; ?>">
                                          <input type="hidden" name="item-des-<?php echo $id;?>" id="item-des" value="<?php echo $row['des'] ; ?>">
                                          <input type="hidden" name="item-price-<?php echo $id;?>" id="item-price" value="<?php echo $row['price']; ?>">
                                    
                                          <input type="number" name="item-quantity-<?php echo $id?>" id="item-quantity" value="1">
                                          <button type="submit" name="sub-btn" value='<?php echo $id ?>' id="sub-btn">Add to Cart</button>
                                    </form> 
                              </div>
                        </div>
            <?php }}?>
      </div>      
</body>
</html>
     
