<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
      <?php include 'includes/apiLink.php'; ?>
      <?php include 'includes/top_nav.php'; ?>
  </head>
  <body>
    <div class="container">
         <br />
         <br />
         <h2 align="center">find your product </h2>
         <div class="form-group">
              <form name="add_name" id="add_name">
                   <div class="table-responsive">
                        <table class="table table-bordered" id="dynamic_field">
                             <tr>
                                  <td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td>
                                  <td><input type="text" name="item_quantity[]" placeholder="item quantity" class="form-control item_quantity" /></td>
                                  <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                             </tr>
                        </table>
                        <div class="col-xs-1">
                          <label for="ex1">Max km</label>
                          <input class="form-control" id="ex1" type="text">
                          <label for="ex1">Min km</label>
                          <input class="form-control" id="ex1" type="text">
                       </div>
                   </div>
              </form>
         </div>
         <label class="container">All in one shop
           <input type="radio" checked="checked" name="radio">
           <span class="checkmark"></span>
        </label>
       <label class="container">More than one shop
         <input type="radio" name="radio">
         <span class="checkmark"></span>
     </label>
      <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
  </body>
  <script src="js/add.js"></script>
</html>
