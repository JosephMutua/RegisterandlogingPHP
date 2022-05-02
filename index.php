<?php
    include('includes/header.php');
?>

  <!-- Login form -->
  <div class="col-md-6">
  <h2>Login Here</h2>
  <form action="#" method = "POST">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
  </div>
  <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
<!-- end of login form -->
<a href="register.php" class="btn btn-success">Click to Register</a>
<?php

    include('includes/footer.php')

?>