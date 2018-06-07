<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <body>
    <?php
    if (isset($_SESSION['AdminID'])) {
      echo '  <div class="topnav">
        <a class="active1" href="adminindex.php">Zedtext</a>
        <a href="create_shop.php">create shop</a>
        <form action="includes\logout_int.php" method="post">
          <button type="submit" name="logout">logout</button>
        </form>
        </div>
      </div>';
      echo $_SESSION['AdminName'];
    }

    ?>

  </body>
</html>
