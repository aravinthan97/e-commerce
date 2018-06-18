<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <body>
    <?php
  $name=  $_SESSION['AdminName'];
    if (isset($_SESSION['AdminID'])) {
      echo '<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="adminindex.php">'.$name.'</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="adminindex.php">Home</a></li>
      <li><a href="create_shop.php">create shop</a></li>
        <li><a href="additeam.php">add iteam</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <form action="includes\logout_int.php" method="post">
      <button type="submit" class="glyphicon glyphicon-log-in" name="logout">logout</button>
    </form>
    </ul>
  </div>
</nav>';
/*      echo '  <div class="topnav">
        <a class="active1" href="adminindex.php">Zedtext</a>
        <a href="create_shop.php">create shop</a>
        <a href="additeam.php">add iteam</a>
        <form action="includes\logout_int.php" method="post">
          <button type="submit" name="logout">logout</button>
        </form>
        </div>
      </div>';
      echo $_SESSION['AdminName']; */
    }

    ?>

  </body>
</html>
