<?php

    include("includes/header.php");

?>

<form action="/action_page.php">
<div class="mb-3 mt-3">
    <label for="text" class="form-label">First Name:</label>
    <input type="text" class="form-control" id="Fname" placeholder="Enter First Name" name="fname" required>
</div>
<div class="mb-3 mt-3">
    <label for="text" class="form-label">Last Name:</label>
    <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" required>
</div>
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
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<!-- end of register form -->

<?php
    include("includes/footer.php");
?>