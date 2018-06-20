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
                <h4 class="text-info">Name:'.($row['name']).'</h4>
                <h4 class="text-info">$'.($row['price']).'</h4>
                <h4 class="text-info">quantity:'.($row['product_quantity']).'</h4>
                <h2>Modal Example</h2>

                <!-- Trigger/Open The Modal -->
                <button id="myBtn">edit</button>


                <!-- The Modal -->
                <div id="myModal" class="modal">

                  <!-- Modal content -->
                  <div class="modal-content">
                    <span class="close">&times;</span>
                    <form class="form-horizontal" role="form" action="includes/editIteam_int.php?id='.($row['Company_ID']).'&product='.($row['id']).'" method="post">
                    <div class="form-group">
                      <label class="col-md-3 control-label">Name:</label>
                      <div class="col-md-8">
                        <input class="form-control" type="text" value="'.($row['Company_ID']).'" name="name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Name:</label>
                      <div class="col-md-8">
                        <input class="form-control" type="text" value="'.($row['id']).'" name="name">
                      </div>
                    </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Name:</label>
                        <div class="col-md-8">
                          <input class="form-control" type="text" value="'.($row['name']).'" name="name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label">price:</label>
                        <div class="col-lg-8">
                          <input class="form-control" type="text" value="'.($row['price']).'" name="price">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label">price:</label>
                        <div class="col-lg-8">
                          <input class="form-control" type="text" value="'.($row['about_product']).'" name="about_product">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label">price:</label>
                        <div class="col-lg-8">
                          <input class="form-control" type="text" value="'.($row['product_quantity']).'" name="product_quantity">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                          <input type="submit" class="btn btn-primary" value="Save Changes" name="updateProduct">
                          <span></span>
                          <input type="reset" class="btn btn-default" value="Cancel">
                        </div>
                      </div>
                    </form>


                  </div>

                </div>
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
