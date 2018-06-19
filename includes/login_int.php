<?php

session_start();

if(isset($_POST['login'])) {

  include_once "DB.php";

  $username_or_email = mysqli_real_escape_string($conn,$_POST['email_or_username']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);

  // error handlers try to work with oop php with error
  // check if input are empty
  if (empty($username_or_email) || empty($password)) {
      header("Location:../login.php?empty");
      exit();
  }else {
    $sql = "SELECT * FROM user WHERE UserName = '$username_or_email' OR Email ='$username_or_email'";
    $result = mysqli_query($conn,$sql);
    $resultChecker = mysqli_num_rows($result);

    if($resultChecker < 1) {
      header("Location:../login.php?login=error");
      exit();
    }else {
       if($row = mysqli_fetch_assoc($result)){
         //de-hash the password
         $hashedpasswordChecker = password_verify($password,$row['Password']);


         if($hashedpasswordChecker == false){
           header("Location:../login.php?login=errorpassword");
           exit();
         }elseif ($hashedpasswordChecker == true) {
           /// log in the the user
           $_SESSION['UID'] = $row['ID'];
           $_SESSION['uName'] = $row['UserName'];
            $_SESSION['uEmail'] = $row['Email'];
             $_SESSION['uBirth'] = $row['Date_Of_Birth'];
             header("Location:../index.php?login='{$_SESSION['uName']}'");
             exit();
         }
       }
    }
  }

}elseif (isset($_POST['adminlogin'])) {

    include_once "DB.php";

    $username_or_email = mysqli_real_escape_string($conn,$_POST['email_or_username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    // error handlers try to work with oop php with error
    // check if input are empty
    if (empty($username_or_email) || empty($password)) {
        header("Location:../admin.php?empty");
        exit();
    }else {
      $sql = "SELECT * FROM admin WHERE Email = '$username_or_email' OR UserName ='$username_or_email'";
      $result = mysqli_query($conn,$sql);
      $resultChecker = mysqli_num_rows($result);

      if($resultChecker < 1) {
        header("Location:../admin.php?login=error");
        exit();
      }else {
         if($row = mysqli_fetch_assoc($result)){
           //de-hash the password
           $hashedpasswordChecker = password_verify($password,$row['Password']);


           if($hashedpasswordChecker == false){
             header("Location:../admin.php?login=errorpassword");
             exit();
           }elseif ($hashedpasswordChecker == true) {
             /// log in the the user
             $_SESSION['AdminID'] = $row['ID'];
             $_SESSION['AdminName'] = $row['UserName'];
              $_SESSION['AdminEmail'] = $row['Email'];
               header("Location:../adminindex.php");
               exit();
           }
         }
      }
    }
}
else {
  header("Location:../index.php");
  exit();
}
?>
