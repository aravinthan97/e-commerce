<?php
session_start();
?>
<?php
   if (isset($_SESSION['UID'])) {
       echo '<nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Ecom</a>
      <a class="navbar-brand" href="#">'.$_SESSION['uName'].'</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="shop.php">Findshop</a></li>
      <li><a href="profile.php">Profile</a></li>



    </ul>
    <ul class="nav navbar-nav navbar-right">
    <form action="includes\logout_int.php" method="post">
      <button type="submit" class="glyphicon glyphicon-log-in" name="logout">logout</button>
    </form>
    </ul>
  </div>
</nav>';
    }
    else {
      echo '<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Ecom</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="shop.php">Findshop</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="admin.php">Admin Login</a></li>
      <li><a href="admin_singup.php">Admin singup</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="Singup.php">singup</a></li>
    </ul>
  </div>
</nav>';
    }
    ?>
