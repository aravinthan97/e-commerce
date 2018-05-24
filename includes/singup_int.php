<?php

is(isset($_POST['submit'])){
include_once 'DB.php';

// check all the name in form
$username = mysqli_real_escape_string($conn,$_POST['username']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$date = mysqli_real_escape_string($conn,$_POST['date_of_birth']);

// Error handlers
//chcek for emty field
if(empty($username) || empty($email) || empty($password) || empty($date)){
  header("Location: ../singup.php?singup=empty");
  exit();
}
else {
  if(!preg_match("/^[a-zA-Z]*$",$username)){
    header("Location: ../singup.php?singup=invalidname");
    exit();
  }
  // code...
}

}else {
// send back
 header("Location: ../singup.php");
 exit();
}

 ?>
