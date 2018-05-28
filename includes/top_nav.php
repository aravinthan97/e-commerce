<!DOCTYPE html>
<html>
  <body>
    <?php
    if (isset($_SESSION['UID'])) {
      echo '<form action="includes\logout_int.php" method="post">
        <button type="submit" name="logout">logout</button>
      </form>
      <a href="profile.php">profile</a>';
  //    echo $_SESSION['UID'];
//      echo $_SESSION['uName'];
  //    echo $_SESSION['uEmail'];
     echo $_SESSION['uBirth'];
    }else {
      echo '  <div class="topnav">
        <a class="active1" href="#home">Zedtext</a>
        <a href="index.php">HOME</a>
        <a href="shop.php">SHOP</a>
        <a href="#contact">MY ACCOUNT</a>
        <a href="#contact">SHOPPING CART</a>
        <a href="#contact">ABOUT US</a>
        <a href="#contact">SERVIES</a>
        <a href="#contact">CONTATC US</a>
        <a class="active2" href="login.php">Login</a>
        <a class="active2" href="Singup.php">SingUp</a>
        <div class="lowtop">
          <button class="buttonCard"><span> 4 iteam in card </span></button>
        </div>
        <div class="search-container">
          <form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
      </div>
      <br />
      <br />';
    }
    ?>
  </body>
</html>
