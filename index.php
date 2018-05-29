<?php
 session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include 'includes/apiLink.php'; ?>
</head>
<body>
  <?php include 'includes/top_nav.php'; ?>

<div class="container">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images\02.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/mountains1.jpg" alt="Chicago" style="width:100%;">
      </div>

      <div class="item">
        <img src="images\02.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<br />
<br />

<div id="near-me">
  <div class="top-shop">
    <div id="ck">
         <a href="itemFilter.php">Find with Cracker</a>
    </div>
     <h2>Shop Near you</h2>
  </div>

</div>

<div class="col-sm-4 col-md-3" >
    <form method="post" action="cart.php?action=add&id=<?php echo $product['Company_ID']; ?>">
        <div class="products">
            <img src="<?php echo $product['image']; ?>" class="img-responsive" width="150px"/>
            <h4 class="text-info"><?php echo $product['name']; ?></h4>
            <input type="submit" name="compony_info" style="margin-top:5px;" class="btn btn-info" value="Find iteam" />
        </div>
    </form>
</div>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
</div>
  <footer>
      <div class="bot-shop">
         <h2 style="text-align:center">about</h2>
      </div>
  </footer>
</body>
</html>
