
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
       v
          <?php
          function iteam() {
            $connect = mysqli_connect('localhost', 'root', '', 'zedtext');
            $query = 'SELECT * FROM company ORDER by Company_ID ASC';
            $result = mysqli_query($connect, $query);

            if ($result):
            if(mysqli_num_rows($result)>0):
                while($product = mysqli_fetch_assoc($result)):

          }
          ?>

               <div class="col-sm-4 col-md-3" >
                   <form method="post" action="cart.php?action=add&id=<?php echo $product['Company_ID']; ?>">
                       <div class="products">
                           <img src="<?php echo $product['Logo']; ?>" class="img-responsive" width="150px"/>
                           <h4 class="text-info"><?php echo $product['Company_Name']; ?></h4>
                           <input type="submit" name="compony_info" style="margin-top:5px;" class="btn btn-info" value="Find iteam" />
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
