<?php
    session_start();
   
?>
<html>
    <head></head>

<body>
<h2>You have sucessfully logined in <?php echo $_SESSION['Useremail'] ?>. </h2>
<p><a href="includes/logout.php">Click here</a> to log out</p>
</body>
</html>