<?php
      $myid = $_GET['id'];
      include_once "includes/DB.php";
      $query="SELECT * FROM products where id= $myid";
      $result = mysqli_query($conn, $query);
      $row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta>
    <title>iteam name </title>
      <?php include 'includes/apiLink.php'; ?>
        <?php include 'includes/top_nav.php'; ?>
  </head>
  <header>

<div class="container">
  <?php
        echo ' <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" class="img-responsive" alt="a" width="200" height="200"/> ';
  ?>
  <h3>Name:<?php echo $row['name'];?></h3>
  <h4>Price:$<?php echo $row['price'];?></h4>
</div>
<div class="container">
  <h2>about</h2>
  <div class="panel panel-default">
    <div class="panel-body">
       <p><?php echo $row['about_product'];?></p>
    </div>
  </div>
</div>
<div class="container">
  <h2>video</h2>
  <div class="panel panel-default">
    <div class="panel-body">
      <h3>video</h3>
      <?php echo $row['video'];?>
    </div>
  </div>
</div>
</header>
  <body>

  </body>
</html>
