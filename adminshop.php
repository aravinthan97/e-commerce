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

      $query="SELECT * FROM products where Company_ID= '{$_GET['id']}'";

    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($result))


       {
            echo '
            <div class="col-md-4">
                <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" class="img-responsive"  height="200" width="200"/><br/>
                <h4 class="text-info">'.($row['Product_name']).'</h4>

              </div>
           </div>
            ';
       }


          ?>


  </body>
</html>
