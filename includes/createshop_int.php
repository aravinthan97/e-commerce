<?php
session_start();
if (isset($_POST['createShop'])) {
  include_once "DB.php";

  // check all the name in form
  $companyName = mysqli_real_escape_string($conn,$_POST['CompanyName']);
  $address_street = mysqli_real_escape_string($conn,$_POST['address-street']);
  $address_city = mysqli_real_escape_string($conn,$_POST['address-city']);
  $address_state = mysqli_real_escape_string($conn,$_POST['address-state']);
  $zipcode = mysqli_real_escape_string($conn,$_POST['address-zipcode']);
  $contry_code = mysqli_real_escape_string($conn,$_POST['contry-code']);
  $number = mysqli_real_escape_string($conn,$_POST['number']);
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
//  $query = "INSERT INTO tbl_images(name) VALUES ('$file')";

  // Error handlers
  //chcek for emty field
  if(empty($companyName) || empty($address_street) || empty($address_city)) {
      header("Location: ../create_shop.php?singup=emptyshop");
  //  header("Location: ../singup.php?singup=empty");
    exit();
      }
          else {
          $sql = "SELECT * FROM company WHERE CompanyName = '$companyName'";
          $result = mysqli_query($conn,$sql);
          $resultChecker = mysqli_num_rows($result);

          if($resultChecker > 0) {
            header("Location:../create_shop.php?companyname=error");
            exit();
          }else {
          //INSERT THE USER INTO THE DATABASE
           $id =" SELECT MAX(ID)FROM company";
           $result = mysqli_query($conn,$id);
           $row = mysqli_fetch_row($result);
           $row[0]+=1;
          $sql = "INSERT INTO company (ID,Admin_ID ,CompanyName,Logo) VALUES('$row[0]','{$_SESSION['AdminID']}','$companyName','$file')";
          $result = mysqli_query($conn,$sql);


    $sql = "INSERT INTO company_address (Company_ID, Street, City, State, Zipcode)
    VALUES('$row[0]','$address_street', '$address_city', '$address_state', '$zipcode')";
      $result = mysqli_query($conn,$sql);

      $sql = "INSERT INTO company_contact (Company_ID, country_code, contact_number)
      VALUES('$row[0]','$contry_code', '$number')";
        $result = mysqli_query($conn,$sql);


          if ($result) {
              // output data of each row
              echo "New address added for company ID: " ;
          } else {
               echo "Error while creating new company";
        }
  //    mysql_close($conn);
       exit();
    }
 }
}

?>
