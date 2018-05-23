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
  <form action="singup.php" method="post">
    <div class="form-group">
      <label>UserName:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="username">
    </div>
    <div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label>Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <div class="form-group">
      <label>Retype-Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="re_password">
    </div>
    <div class="form-group">
      <label>Date of Birth:</label>
      <input type="date" class="form-control" id="email" placeholder="Enter email" name="date_of_birth">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
