

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <?php include 'includes/apiLink.php'; ?>
      <?php include 'includes/admin_nav.php'; ?>
  </head>
  <body>
    <?php
      include_once "includes/DB.php";

       $sqlFind="SELECT * FROM company where Admin_ID= '{$_SESSION['AdminID']}'";
    // $sqlFind = "SELECT * FROM admin INNER JOIN company ON admin.ID = company.Admin_ID";
      $run = mysqli_query($conn,$sqlFind);

       $sql="SELECT * FROM company";
       $run1 = mysqli_query($conn,$sql);
      if ($run1):
          if(mysqli_num_rows($run1)>0):
              while($rows = mysqli_fetch_assoc($run1)):
              //print_r($product);
    //  if(mysqli_num_rows($run) > 0){
    //    while ($rows = mysqli_fetch_array($run)) {
          // code...
    //      echo $rows["CompanyName"]."<br>";
    echo $rows['Logo'];
          ?>
          <div class="col-sm-4 col-md-3" >
                  <div class="products">
                      <img src="images/<?php echo $rows['Logo']; ?>" class="img-responsive"/>
                      <h4 class="text-info"><?php echo $rows['CompanyName']; ?></h4>
                      <input type="button" name="SELECT" style="margin-top:5px;" class="btn btn-info" value="SELECT" />
          </div>
          <?php
        endwhile;
    endif;
endif;
    ?>


  </body>
</html>
