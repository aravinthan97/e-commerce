<?php
session_start();
?>

    <?php
    if (isset($_SESSION['AdminID'])) {
      echo '<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="adminindex.php">'. $_SESSION['AdminName'].'</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="adminindex.php">Home</a></li>
      <li><a href="create_shop.php">create shop</a></li>
        <li><a href="additeam.php">add iteam</a></li>
          <li><a href="adminProfile.php">Profile</a></li>
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
    <li><a href="admin.php">Admin Login</a></li>
    <li><a href="admin_singup.php">Admin singup</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="Singup.php">singup</a></li>

    </ul>
  </div>
</nav>';}

    ?>
