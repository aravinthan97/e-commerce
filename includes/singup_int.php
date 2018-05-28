<?php

if (isset($_POST['submit'])){
include_once "DB.php";

// check all the name in form
$username = mysqli_real_escape_string($conn,$_POST['username']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$re_password = $_POST['re_password'];
$date = mysqli_real_escape_string($conn,$_POST['date_of_birth']);


// Error handlers
//chcek for emty field
if(empty($username) || empty($email) || empty($password) || empty($date)){
    header("Location: ../singup.php?singup=empty");
//  header("Location: ../singup.php?singup=empty");
  exit();
}
elseif(!preg_match("/^[a-zA-Z]*$/",$username)){
    header("Location: ../singup.php?singup=invalidname");
    exit();
  }

elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      header("Location: ../singup.php?singup=invalidemail");
      exit();
    }
else {
      $sql = "SELECT * FROM user WHERE email = '$email'";
      $result = mysqli_query($conn,$sql);
      $resultChecker = mysqli_num_rows($result);

      if($resultChecker > 0) {
        header("Location: ../singup.php?singup=thisemailhasbeen used");
        exit();
      } else {

        if($password == $re_password){
          //hashing the password
          $hashed = password_hash($password ,PASSWORD_DEFAULT);
          //INSERT THE USER INTO THE DATABASE
          $sql = "INSERT INTO user(UserName , Email , Password , Date_of_Birth) VALUES('$username','$email','$hashed','$date')";
          $result = mysqli_query($conn,$sql);
          header("Location: ../singup.php?singup=successfully");
          exit();
        } else {
          header("Location: ../singup.php?singup=passwordDoNotMatch");
          exit();
        }

        }
    }
}

else {
// send back
 header("Location: ../singup.php");
 exit();
}

 ?>
