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
    $query = "SELECT * FROM products where ID ='{$_GET['product']}'";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($result))

    {
         echo '
         <form class="form-horizontal" role="form" action="includes/editIteam_int.php?id='.($row['Company_ID']).'&product='.($row['id']).'" method="post">
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
             <label class="col-lg-3 control-label">about product:</label>
             <div class="col-lg-8">
             <textarea rows="10" cols="150"  name="about_product">
             '.($row['about_product']).'
             </textarea>

             </div>
           </div>
           <div class="form-group">
             <label class="col-lg-3 control-label">product quantity:</label>
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
         ';
    }

    ?>
  </body>
</html>
