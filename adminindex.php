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
      if (isset($_SESSION['AdminID'])) {
      include_once "includes/DB.php";

       $query="SELECT * FROM company where Admin_ID= '{$_SESSION['AdminID']}'";

    //   $query = "SELECT * FROM company ORDER BY ID DESC";
       $result = mysqli_query($conn, $query);
       while($row = mysqli_fetch_array($result))


       {
            echo '
            <div class="col-md-4">
                <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                <img src="data:image/jpeg;base64,'.base64_encode($row['Logo'] ).'" class="img-responsive"  height="200" width="200"/><br/>
                <h4 class="text-info">Shop Name :'.($row['CompanyName']).'</h4>
                <h4 class="text-info">'.($_SESSION['COMPANYID']=$row['ID']).'</h4>
                <a href="adminshop.php?id='.($_SESSION['COMPANYID']).'">Click to look at iteam</a>
              </div>
           </div>
            ';
       }
} else {
  header("Location:admin.php");
  exit();
}

          ?>


  </body>
</html>
<script type='text/javascript' src='js\image.js'></script>
