<?php

    session_start();

    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'registerandlogingphp');

    $email = $_POST['email'];
    $password = $_POST['pswd'];

    $s = "Select * from user_details where email='$email' && password='$password'";
    $result = mysqli_query($con,$s);

    $num = mysqli_num_rows($result);
    if ($num == 1){
        $_SESSION['Useremail']=$email;
        header ('location:dash.php');
    }
    else{
        echo 'Wrong password or email';
    }
?>