<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php include 'includes/apiLink.php'; ?>
      <?php include 'includes/top_nav.php';?>
  </head>
  <body>
    <div class="container">
    <div class="row">
        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                      <?php
                        include_once "includes/DB.php";
                       $query="SELECT * FROM products where Company_ID= '{$_GET['id']}'";
                      $result = mysqli_query($conn, $query);
                      while($row = mysqli_fetch_array($result))


                      {
                           echo '
                           <div class="col-sm-3">
                               <div class="col-item">
                                   <div class="info">
                                       <div class="row">
                                           <div class="price col-md-6">
                                             <h5 class="text-info">'.($row['Product_name']).'</h5>
                                              <h5 class="price-text-color">$'.($row['per_product_price']).'</h5>

                                           </div>
                                           <div class="rating hidden-sm col-md-6">
                                               <i class="price-text-color fa fa-star"></i>
                                               <i class="price-text-color fa fa-star"></i>
                                           </div>
                                       </div>
                                   </div>

                                   <div class="photo">
                                       <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" class="img-responsive" alt="a" />
                                   </div>
                                   <div class="info">
                                       <div class="separator clear-left">
                                           <p class="btn-add">
                                               <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Add to cart</a>
                                           </p>
                                           <p class="btn-details">
                                               <i class="fa fa-list"></i><a href="#" class="hidden-sm">More details</a>
                                           </p>
                                       </div>
                                       <div class="clearfix">
                                       </div>
                                   </div>
                               </div>
                           </div>
                           ';
                      }

                      ?>

        </div>
    </div>
</div>
</div>
</div>
</div>

  </body>
</html>
