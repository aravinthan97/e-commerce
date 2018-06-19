<?php include 'includes/apiLink.php'; ?>
  <?php include 'includes/top_nav.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Shopping Cart (working)</title>
        <link rel="stylesheet" type="text/css" href="styles/cart.css">
    </head>
    <body>
      <h2>Modal Example</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
    <div class="table-responsive">
    <table class="table">
        <tr><th colspan="5"><h3>Order Details</h3></th></tr>
    <tr>
         <th width="40%">Product Name</th>
         <th width="10%">Quantity</th>
         <th width="20%">Price</th>
         <th width="15%">Total</th>
         <th width="5%">Action</th>
    </tr>
    <?php
    $myid = $_GET['id'];
    if(!empty($_SESSION['shopping_cart'])):

         $total = 0;

         foreach($_SESSION['shopping_cart'] as $key => $product):
    ?>
    <tr>
       <td><?php echo $product['name']; ?></td>
       <td><?php echo $product['quantity']; ?></td>
       <td>$ <?php echo $product['price']; ?></td>
       <td>$ <?php echo number_format($product['quantity'] * $product['price'], 2); ?></td>
       <td>
           <a href="text1.php?myid=<?php echo $myid?>&action=delete&id=<?php echo $product['id']; ?>">
                <div class="btn-danger">Remove</div>
           </a>
       </td>
    </tr>
    <?php
              $total = $total + ($product['quantity'] * $product['price']);
         endforeach;
    ?>
    <tr>
         <td colspan="3" align="right">Total</td>
         <td align="right">$ <?php echo number_format($total, 2); ?></td>
         <td></td>
    </tr>
    <tr>
        <!-- Show checkout button only if the shopping cart is not empty -->
        <td colspan="5">
         <?php
            if (isset($_SESSION['shopping_cart'])):
            if (count($_SESSION['shopping_cart']) > 0):
         ?>
            <a href="#" class="button">Checkout</a>
         <?php endif; endif; ?>
        </td>
    </tr>
    <?php
    endif;
    ?>
    </table>
     </div>
  </div>

</div>
        <div class="container">
        <?php

        include_once "includes/DB.php";
       $query="SELECT * FROM products where Company_ID= '{$_GET['id']}'";
  //      $query = 'SELECT * FROM products ORDER by id ASC';
        $result = mysqli_query($conn, $query);
        if ($result):
            if(mysqli_num_rows($result)>0):
                while($product = mysqli_fetch_assoc($result)):
                //print_r($product);
                ?>
                <div class="col-sm-4 col-md-3" >
                    <form method="post" action="text1.php?myid=<?php echo $myid?>&action=add&id=<?php echo $product['id']; ?>">
                        <div class="products">
                          <?php
                                echo ' <img src="data:image/jpeg;base64,'.base64_encode($product['image'] ).'" class="img-responsive" alt="a"/>';
                          ?>
                            <h4 class="text-info"><?php echo $product['name']; ?></h4>
                            <h4>$ <?php echo $product['price']; ?></h4>
                            <input type="text" name="quantity" class="form-control" value="1" />
                            <input type="hidden" name="name" value="<?php echo $product['name']; ?>" />
                            <input type="hidden" name="price" value="<?php echo $product['price']; ?>" />
                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-info"
                                   value="Add to Cart" />
                        </div>
                    </form>
                </div>
                <?php
                endwhile;
            endif;
        endif;
        ?>
        <div style="clear:both"></div>
        <br />

        </div>
    </body>
</html>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
