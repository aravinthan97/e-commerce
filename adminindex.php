<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <?php include 'includes/apiLink.php'; ?>
      <?php include 'includes/admin_nav.php'; ?>
  </head>
  <body>
    //set company id and if not ddont work
    <?php
    if (isset($_SESSION['UID'])) {
      echo '  <div class="topnav">
        <a class="active1" href="adminindex.php">Zedtext</a>
        <a href="create_shop.php">create shop</a>
        <form action="includes\logout_int.php" method="post">
          <button type="submit" name="logout">logout</button>
        </form>
        </div>
      </div>';
      echo $_SESSION['uName'];
    }

    ?>

  </body>
</html>
