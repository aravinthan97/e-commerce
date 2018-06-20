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
    <div class="container">
      <h2>add iteam</h2>
      <form action="includes/additeam_int.php" method="post"  enctype="multipart/form-data">
        <div class="form-group">
          <label>CompanyName:</label>
          <select name="company" id="company">
            <option value="Select School">Select Shool</option>
            <?php
              include_once "includes/DB.php";

               $query="SELECT * FROM company where Admin_ID= '{$_SESSION['AdminID']}'";
               $result = mysqli_query($conn, $query);
               while($row = mysqli_fetch_array($result))


               {

                    echo "<option value='" . $_SESSION['COMPANYID']=$row['ID'] . "'>'" . $row['CompanyName'] . "'</option>";

               }


                  ?>
          </select>
        </div>
        <div class="form-group">
          <label>product name:</label>
          <input type="username" class="form-control" id="username" placeholder="Enter iteam name " name="iteamName">
        </div>
        <div class="form-group">
          <label>iteam type:</label>
        <select name="myselectbox">
         <option name="FrozenFood" value="FrozenFood">FrozenFood</option>
         <option name="Meat" value="Meat">Meat</option>
         <option name="water" value="water">water</option>
         <option name="cleaners" value="cleaners">cleaners</option>
         <option name="rawfood" value="rawfood">rawfood</option>
        </select>
        <div class="form-group">
          <label>iteam price</label>
          <input type="text" class="form-control" placeholder="Enter price" name="price">
        </div>
        <div class="form-group">
          <label>quantity:</label>
          <input type="number" class="form-control" placeholder="Enter quantity" name="quantity">
        </div>
        <div class="form-group">
          <label>about:</label>
          <input type="text" class="form-control" placeholder="about iteam" name="about">
        </div>
        <div class="form-group">
          <label>image iteam :</label>
          <input type="file" class="form-control"  placeholder="Enter image" name="imageIcon">
        </div>
        <div class="form-group">
          <label>video URL</label>
          <input type="text" class="form-control" placeholder="Enter video url" name="video">
        </div>

        <button type="submit" class="btn btn-primary"name="itemsubmit">Submit</button>
      </form>
    </div>

  </body>
</html>
<script type='text/javascript' src='js\image.js'></script>
