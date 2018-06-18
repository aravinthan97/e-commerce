<?php

if(isset($_POST['itemsubmit'])) {
  include_once "DB.php";
    $company = mysqli_real_escape_string($conn,$_POST['company']);
    $iteamname = mysqli_real_escape_string($conn,$_POST['iteamName']);
    $price = mysqli_real_escape_string($conn,$_POST['price']);
    $quantity = mysqli_real_escape_string($conn,$_POST['quantity']);
    $about = mysqli_real_escape_string($conn,$_POST['about']);
    $file = addslashes(file_get_contents($_FILES["imageIcon"]["tmp_name"]));
    $type = $_POST['myselectbox'];

  $sql = "INSERT INTO products ( Company_ID, Product_name, product_type, per_product_price, product_quantity, about_product, image )
   VALUES('$company','$iteamname','$type','$price','$quantity','$about','$file')";
  $result = mysqli_query($conn,$sql);




}

?>
