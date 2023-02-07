<?php
include("header.php"); 
?>


<div class="container">
  <div class="row my-5">
    <div class="col">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Sr no</th>
            <th></th>
            <th>Price</th>
            <th>Quantity</th>
          </tr>
        </thead>
        <tbody>
          <?php
          
          if (isset($_SESSION['CartData'])) {
            // echo "<pre>";
            // print_r($_SESSION['CartData']);
            foreach ($_SESSION['CartData'] as $key => $value) { ?>
            <tr>
              <td><img width="150px" src="<?php echo $value['prod1_image']; ?>" alt=""></td>
              <td><?php echo $value['prod1_title']?></td>
              <td><?php echo $value['prod1_price']?></td>
              <td><?php echo $value['prod1_quantity']?></td>
            </tr> 
           <?php  
            }
          } else { ?>
             <tr>
              <td colspan="5">No data found</td>
            </tr>
          <?php } ?>
        </tbody>
        <tfoot>
          <tr>
            <td> <a href="emptycart.php">Empty Cart</a> </td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
</body>
</html>
