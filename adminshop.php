<?php include 'includes/apiLink.php'; ?>
<?php include 'includes/admin_nav.php'; ?>
<?php
if (!isset($_SESSION['AdminID'])){
header("Location:admin.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
                <h4 class="text-info">Name: '.($row['name']).'</h4>
                <h4 class="text-info">Price: $'.($row['price']).'</h4>
                <h4 class="text-info">quantity: '.($row['product_quantity']).'</h4>
                <a href="iteamEdit.php?id='.($row['Company_ID']).'&product='.($row['id']).'" class="btn btn-info" role="button">Edit</a>
              </div>
           </div>
            ';
       }
          ?>


  </body>
</html>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
