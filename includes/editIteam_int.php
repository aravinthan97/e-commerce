<?php

       if (isset($_POST['updateProduct'])){
          $id = $_GET['id'];
          $product = $_GET['product'];
         include_once "DB.php";
       // check all the name in form
       $name = mysqli_real_escape_string($conn,$_POST['name']);
       $price = mysqli_real_escape_string($conn,$_POST['price']);
       $about_product = mysqli_real_escape_string($conn,$_POST['about_product']);
       $product_quantity = mysqli_real_escape_string($conn,$_POST['product_quantity']);

       $sql = "UPDATE `products` SET `name`='".$name."',`price`='".$price."',`about_product`='".$about_product."',`product_quantity`='".$product_quantity."' WHERE `id`=$product";
       $result = mysqli_query($conn,$sql);

       if($result){
        echo "data update";
        header('Location:../adminshop.php?id='.$id);
        exit();
       }
       else {
          echo "not update ";
          exit();
       }
       mysqli_close($conn);
       exit();
       }  else {

             header("Location:../adminindex.php");
         }
?>
