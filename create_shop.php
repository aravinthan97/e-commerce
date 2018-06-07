<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php include 'includes/apiLink.php'; ?>
    <?php include 'includes/admin_nav.php'; ?>
  </head>
  <body>
     <div class="container" >
       <form action="includes/createshop_int.php" method="post">
         <div class="form-group">
           <label for="username">CompanyName</label>
           <input type="text" class="form-control" placeholder="Enter CompanyName" name="CompanyName">
         </div>
         <div class="form-group">
           <label for="address">Company-address-street:</label>
           <input type="text" class="form-control" placeholder="Enter street" name="address-street">
         </div>
         <div class="form-group">
           <label for="address">Company-address-city:</label>
           <input type="text" class="form-control" placeholder="Enter city" name="address-city">
         </div>
         <div class="form-group">
           <label for="address">Company-address-state:</label>
           <input type="text" class="form-control" placeholder="Enter state" name="address-state">
         </div>
         <div class="form-group">
           <label for="address">Company-address-zipcode:</label>
           <input type="text" class="form-control" placeholder="Enter zipcode" name="address-zipcode">
         </div>
         <div class="form-group">
           <label for="address">contry code:</label>
           <input type="text" class="form-control" placeholder="Enter contry code" name="contry-code">
         </div>
         <div class="form-group">
           <label for="address">number:</label>
           <input type="text" class="form-control" placeholder="Enter phone number" name="number">
         </div>
      <!--   <div class="form-group">
           <label for="address">Logo</label>
           <input type="file" class="form-control" name="logo">
         </div> -->
         <button type="submit" class="btn btn-primary" name="createShop">Submit</button>
       </form>

     </div>
  </body>
</html>
