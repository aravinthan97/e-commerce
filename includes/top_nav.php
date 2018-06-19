<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <body>
    <?php
    if (isset($_SESSION['UID'])) {
      echo '<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">'.$_SESSION['uName'].'</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="">Home</a></li>
      <li><a href="">Findshop</a></li>
      <li><a href="profile.php">Profile</a></li>
      <li><a href="">Card</a></li>
      <li><a href="itemFilter.php">Filter</a></li>

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
      <a class="navbar-brand" href="adminindex.php">Admin</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
    <a class="active2" href="login.php">Login</a>
    <a class="active2" href="Singup.php">SingUp</a>
    </ul>
  </div>
</nav>';
    }

    ?>

  </body>
</html>
