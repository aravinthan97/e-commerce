<?php

if (isset($_POST['createShop'])) {
  include_once "DB.php";

  // check all the name in form
  $CompanyName = mysqli_real_escape_string($conn,$_POST['CompanyName']);
  $address_street = mysqli_real_escape_string($conn,$_POST['address-street']);
  $Company_address_city = mysqli_real_escape_string($conn,$_POST['address-city']);
  $Company_address_state = mysqli_real_escape_string($conn,$_POST['address-state']);
  $Company_address_zipcode = mysqli_real_escape_string($conn,$_POST['address-zipcode']);
  $contry_code= mysqli_real_escape_string($conn,$_POST['contry-code']);
  $number= mysqli_real_escape_string($conn,$_POST['number']);
  $imagename=$_FILES["logo"]["name"];

//  || empty($address_street) || empty($Company_address_city) || empty($Company_address_state)
//  || empty($Company_address_zipcode)|| empty($contry_code) || empty($number) || empty($imagename)
  // Error handlers
  //chcek for emty field
  if(empty($CompanyName)) {
      header("Location: ../create_shop.php?singup=empty");
  //  header("Location: ../singup.php?singup=empty");
    exit();
  }
  elseif(!preg_match("/^[a-zA-Z]*$/",$CompanyName)){
      header("Location: ../create_shop.php?singup=invalidname");
      exit();
    }

  else {
        $sql = "SELECT * FROM company WHERE CompanyName = '$CompanyName'";
        $result = mysqli_query($conn,$sql);
        $resultChecker = mysqli_num_rows($result);

        if($resultChecker > 0) {
          header("Location: ../create_shop.php?singup=thisnamehasbeen used");
          exit();
        }
         else {

            //INSERT THE USER INTO THE DATABASE
            $sql = "INSERT INTO company ( CompanyName) VALUES('$CompanyName')";
            $result = mysqli_query($conn,$sql);
            header("Location: ../admin_singup.php?singup=successfully");
            exit();



          }
      }
}
?>
