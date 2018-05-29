<?php
session_start();
$product_ids = array();
// check if add to cart button has been submitted
if(filter_input(INPUT_POST,'add_to_cart')){
     if(isset($_SESSION['shopping_cart'])){

     }
     // if shopping card doesn't exist create first product with array key 0
     else {
       // code...
     }
}

?>
