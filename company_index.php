<!DOCTYPE html>
<html>
  <head>
     <title>Company Name</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'includes/apiLink.php'; ?>
  </head>
  <body>
    <header>
    <?php include 'includes/top_nav.php'; ?>

  <div class="container" style="width:900px">
     <img src="images\02.jpg" class="img-fluid image" alt="Responsive image">
    <div class="overlay">
     <div class="text">Company logo</div>
   </div>
 </div>

 </header>

 <div class="container">
   <h2>Card Image</h2>
   <p>Image at the top (card-img-top):</p>
   <div class="card" style="width:400px">
     <img class="card-img-top" src="images\02.jpg" alt="Card image" style="width:100%">
     <div class="card-body">
       <h4 class="card-title">John Doe</h4>
       <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
       <a href="aboutiteam.php" class="btn btn-primary">See Profile</a>
     </div>
   </div>
   <br>

   <p>Image at the bottom (card-img-bottom):</p>
   <div class="card" style="width:400px">
     <div class="card-body">
       <h4 class="card-title">Jane Doe</h4>
       <p class="card-text">Some example text some example text. Jane Doe is an architect and engineer</p>
       <a href="#" class="btn btn-primary">See Profile</a>
     </div>
     <img class="card-img-bottom" src="img_avatar6.png" alt="Card image" style="width:100%">
   </div>
 </div>


    <footer></footer>
  </body>
</html>
