<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign in</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include 'includes/apiLink.php'; ?>
</head>
<body>

  <?php include 'includes/top_nav.php'; ?>

<div class="container">
  <h2>Sign in</h2>
  <form action="includes/login_int.php" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" placeholder="Enter email or username" name="email_or_username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" placeholder="Enter password" name="password">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary" name="login">Submit</button>
  </form>
</div>

</body>
</html>
