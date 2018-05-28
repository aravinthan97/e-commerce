<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include 'includes/apiLink.php'; ?>
</head>
<body>

  <?php include 'includes/top_nav.php'; ?>

<div class="container">
  <h2>Register</h2>
  <form action="includes/singup_int.php" method="post">
    <div class="form-group">
      <label>UserName:</label>
      <input type="username" class="form-control" id="username" placeholder="Enter email" name="username">
    </div>
    <div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control" id="useremail" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label>Password:</label>
      <input type="password" class="form-control" id="userpwd" placeholder="Enter password" name="password">
    </div>
    <div class="form-group">
      <label>Retype-Password:</label>
      <input type="password" class="form-control" id="userpwd2" placeholder="Enter password" name="re_password">
    </div>
    <div class="form-group">
      <label>Date of Birth:</label>
      <input type="date" class="form-control" id="Birth" placeholder="Enter email" name="date_of_birth">
    </div>
    <button type="submit" class="btn btn-primary"name="submit">Submit</button>
  </form>
</div>

</body>
</html>
