
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>shop</title>
      <?php include 'includes/apiLink.php'; ?>
      <link rel="stylesheet" href="styles/cart.css">
  </head>
  <body>

          <div class="container">

          <?php
            include_once "includes/DB.php";
        //    $connect = mysqli_connect('localhost', 'root', '', 'zedtext');
            $query = 'SELECT * FROM products ORDER by id ASC';
            $result = mysqli_query($conn, $query);

            if ($result):
            if(mysqli_num_rows($result)>0):
                while($product = mysqli_fetch_assoc($result)):


          ?>

               <div class="col-sm-4 col-md-3" >
                   <form method="post" action="cart.php?action=add&id=<?php echo $product['id']; ?>">
                       <div class="products">
                           <img src="<?php echo $product['image']; ?>" class="img-responsive" width="150px"/>
                           <h4 class="text-info"><?php echo $product['name']; ?></h4>
                           <h4>$<?php echo $product['price'];?></h4>
                           <input type="text" name="quantity" class="form-control" value="1"/>
                           <input type="hidden" name="name" value="<?php echo $product['name'];?>"/>
                           <input type="hidden" name="price" value="<?php echo $product['price'];?>"/>
                           <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-info" value="Find iteam" />
                       </div>
                   </form>
               </div>
               <?php
               endwhile;
           endif;
       endif;

          ?>


</div>

</body>
</html>
