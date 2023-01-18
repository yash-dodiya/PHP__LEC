<?php include("header.php");


            if(isset($_SESSION['userdata']['username']))
            {
                  if(isset($_POST['sub-btn']))
                  {
                        if($_SESSION['userdata']['username']=="dodiya yash" && $_SESSION['userdata']['password']=="0000")
                        {
                              $id=$_POST['sub-btn'];
                              $_SESSION['cartdata'][$id] = array("item-id"=>$id,
                              "item-img"=>$_POST['item-img-'.$id],
                              "item-name"=>$_POST['item-name-'.$id],
                              "item-quantity"=>$_POST['item-quantity-'.$id],
                              "item-des"=>$_POST['item-des-'.$id],
                              "item-price"=>$_POST['item-price-'.$id]
                        );

                              echo '<script>alert("session set");</script>';                                
                        }
                        else{
                              echo '<script>alert("not session set");</script>';
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
            //read the json file
            $json=file_get_contents("product.json");
            $json_data=json_decode($json,true);
                  foreach($json_data['products'] as $value ){
                  $id=$value['id'];  

            ?>
            <div class="product">
                  <div class="image-box">
                        <div class="images" id="image-1">
                              <img src='<?php echo $value['thumbnail']; ?>' style="height: 300;width: 350;">
                        </div>
                  </div>
                  <div class="text-box">
                        <h2 class="item"><?php echo $value['title']; ?></h2>
                        <h3 class="price"><?php echo $value['price']; ?></h3>
                        <p class="description"><?php echo $value['description']; ?></p>
                        
                        <form method="post">
                              <label for="item-1-quantity">Quantity:</label>

                              <input type="hidden" name="item-id-<?php echo $id;?>" id="item-id" value="<?php echo $id?>">
                              <input type="hidden" name="item-img-<?php echo $id;?>" id="item-img" value="<?php echo $value['thumbnail']?>" >
                              <input type="hidden" name="item-name-<?php echo $id;?>" id="item-name" value="<?php echo $value['title']; ?>">
                              <input type="hidden" name="item-des-<?php echo $id;?>" id="item-des" value="<?php echo $value['description']; ?>">
                              <input type="hidden" name="item-price-<?php echo $id;?>" id="item-price" value="<?php echo $value['price']; ?>">
                             
                                 <input type="number" name="item-quantity-<?php echo $id?>" id="item-quantity" value="1">
                              <button type="submit" name="sub-btn" value='<?php echo $id ?>' id="sub-btn">Add to Cart</button>
                        </form>
                  </div>
            </div>
            <?php }?>
      </div>      
</body>
</html>
     
