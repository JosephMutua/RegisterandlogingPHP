<?php
    session_start();
    if (!isset($_SESSION['email'])){
        header('location: index.php');
    }
?>
<html>
    <head></head>

<body>
<h2>You have sucessfully logined in <?php echo $_SESSION['Useremail'] ?>. </h2>
<p><a href="logout.php">Click here</a> to log out</p>
</body>
</html>