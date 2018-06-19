<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include 'includes/apiLink.php'; ?>
  <?php include 'includes/admin_nav.php'; ?>
</head>
<body>
<div class="container">
  <h2>Register</h2>
  <form action="includes/singup_int.php" method="post">
    <div class="form-group">
      <label>UserName:</label>
      <input type="username" class="form-control" id="username" placeholder="Enter email" name="usernameadmin">
    </div>
    <div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control" id="useremail" placeholder="Enter email" name="emailadmin">
    </div>
    <div class="form-group">
      <label>Password:</label>
      <input type="password" class="form-control" id="userpwd" placeholder="Enter password" name="passwordadmin">
    </div>
    <div class="form-group">
      <label>Retype-Password:</label>
      <input type="password" class="form-control" id="userpwd2" placeholder="Enter password" name="re_passwordadmin">
    </div>
    <button type="submit" class="btn btn-primary"name="submitAdmin">Submit</button>
  </form>
</div>

</body>
</html>
