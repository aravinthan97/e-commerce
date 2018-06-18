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

       $query="SELECT * FROM company where Admin_ID= '{$_SESSION['AdminID']}'";

    //   $query = "SELECT * FROM company ORDER BY ID DESC";
       $result = mysqli_query($conn, $query);
       while($row = mysqli_fetch_array($result))


       {
            echo '
                 <tr>
                      <td>
                           <h2>'.($row['CompanyName']).'</h2>
                           <img src="data:image/jpeg;base64,'.base64_encode($row['Logo'] ).'" height="200" width="200" class="img-thumnail" />
                           

                      </td>
                 </tr>
            ';
       }


          ?>




  </body>
</html>
<script type='text/javascript' src='js\image.js'></script>
