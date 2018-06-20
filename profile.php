<?php include 'includes/apiLink.php'; ?>
<?php include 'includes/top_nav.php'; ?>
<?php
if (!isset($_SESSION['UID'])){
header("Location:admin.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>profile</title>
  </head>
  <body>
    <div class="container">
        <h1>Edit Profile</h1>
      	<hr>
    	<div class="row">
          <!-- left column -->
          <div class="col-md-3">
            <div class="text-center">
              <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
              <h6>Upload a different photo...</h6>

              <input type="file" class="form-control">
            </div>
          </div>

          <!-- edit form column -->
          <div class="col-md-9 personal-info">
            <h3>Personal info</h3>

            <form class="form-horizontal" role="form" action="includes\profile_int.php" method="post">

              <div class="form-group">
                <label class="col-md-3 control-label">Username:</label>
                <div class="col-md-8">
                  <input class="form-control" type="text" value="<?php echo $_SESSION['uName']; ?>" name="username">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-3 control-label">Email:</label>
                <div class="col-lg-8">
                  <input class="form-control" type="text" value="<?php echo $_SESSION['uEmail']; ?>" name="email">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-3 control-label">Date_of_Birth:</label>
                <div class="col-lg-8">
                  <input class="form-control" type="date" value="<?php echo $_SESSION['uBirth']; ?>" name="date_of_birth">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label"></label>
                <div class="col-md-8">
                  <input type="submit" class="btn btn-primary" value="Save Changes" name="update">
                  <span></span>
                  <input type="reset" class="btn btn-default" value="Cancel">
                </div>
              </div>
            </form>
          </div>
      </div>
    </div>
    <hr>

  </body>
</html>
