<?php

if(isset($_POST['itemsubmit'])) {
  include_once "DB.php";
    $company = mysqli_real_escape_string($conn,$_POST['company']);
    $iteamname = mysqli_real_escape_string($conn,$_POST['iteamName']);
    $price = mysqli_real_escape_string($conn,$_POST['price']);
    $quantity = mysqli_real_escape_string($conn,$_POST['quantity']);
    $about = mysqli_real_escape_string($conn,$_POST['about']);
    $file = addslashes(file_get_contents($_FILES["imageIcon"]["tmp_name"]));
    $video = mysqli_real_escape_string($conn,$_POST['video']);
    $type = $_POST['myselectbox'];

    if (empty($company) || empty($iteamname) || empty($price) || empty($quantity) || empty($about) || empty($file) || empty($video) || empty($type)) {
        header("Location:../additeam.php?error=empty");
        exit();
    }
else {
  $sql = "INSERT INTO products (Company_ID, name, product_type, price, product_quantity, about_product, image,video)
   VALUES('$company','$iteamname','$type','$price','$quantity','$about','$file','$video')";
  $result = mysqli_query($conn,$sql);

  if ($result) {
        header("Location:../additeam.php?products=created successfully");
  } else {
       echo "Error while creating new products";
  }
}

}
else {

    header("Location:../additeam.php");
}

?>
