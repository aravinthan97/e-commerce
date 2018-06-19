<?php
session_start();
if (isset($_POST['update'])){
include_once "DB.php";

echo "all good ";
// check all the name in form
$username = mysqli_real_escape_string($conn,$_POST['username']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$date = mysqli_real_escape_string($conn,$_POST['date_of_birth']);
$id = $_SESSION['UID'];

$sql = "UPDATE `user` SET `UserName`='".$username."',`Email`='".$email."',`Date_Of_Birth`='".$date."' WHERE `User_ID`= $id";
$result = mysqli_query($conn,$sql);

if($result){
  echo "data update";
}
else {
    echo "not update ";
}
mysqli_close($conn);
exit();
}

 elseif (isset($_POST['Adminupdate'])){
include_once "DB.php";

echo "all good ";
// check all the name in form
$username = mysqli_real_escape_string($conn,$_POST['username']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$id = $_SESSION['AdminID'];

$sql = "UPDATE `admin` SET `UserName`='".$username."',`Email`='".$email."' WHERE `User_ID`= $id";
$result = mysqli_query($conn,$sql);

if($result){
  echo "data update";
}
else {
    echo "not update ";
}
mysqli_close($conn);
exit();
}
else {
  echo "all not good";
}
?>
