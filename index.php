<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include 'includes/apiLink.php'; ?>
    <?php include 'includes/top_nav.php'; ?>
</head>
<body>

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
        <img src="images/E-commerce-Flash-Sales.jpg" alt="Los Angeles" width="900" height="600">
      </div>

      <div class="item"  width="900" height="600">
          <img src="images\6-Key-Call-Center-Metrics-for-E-commerce-Business.jpg" alt="Los Angeles" width="900" height="600">
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
     <h2>shop</h2>
     <div class="container">
     <?php
    include_once "includes/DB.php";
     $query = 'SELECT * FROM company  ORDER by ID  ASC';
     $result = mysqli_query($conn, $query);
     while($row = mysqli_fetch_array($result))


     {
          echo '
          <div class="col-md-4">
              <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
              <img src="data:image/jpeg;base64,'.base64_encode($row['Logo'] ).'" class="img-responsive"  height="200" width="200"/><br/>
              <h4 class="text-info">Shop Name :'.($row['CompanyName']).'</h4>
              <a href="iteam.php?id='.($_SESSION['COMPANYID']=$row['ID']).'">Click to look at iteam</a>
            </div>
         </div>
          ';
     }

     ?>
</div>
  </div>

</div>


</body>
</html>
