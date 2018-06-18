
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php include 'includes/apiLink.php'; ?>
    <?php include 'includes/admin_nav.php'; ?>
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

                    echo "<option value='" . $row['ID'] . "'>'" . $row['CompanyName'] . "'</option>";

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
         <option name="myoption1" value="myoption1">myoption1</option>
         <option name="myoption2" value="myoption2">myoption2</option>
         <option name="myoption3" value="myoption3">myoption3</option>
         <option name="myoption4" value="myoption4">myoption4</option>
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

        <button type="submit" class="btn btn-primary"name="itemsubmit">Submit</button>
      </form>
    </div>

  </body>
</html>
<script type='text/javascript' src='js\image.js'></script>
