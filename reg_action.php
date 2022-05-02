<?php
    session_start();

    $con = mysqli_connect('localhost', 'root','');
    mysqli_select_db($con, 'registerandlogingphp');

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['pswd'];

    $s = "Select * from user_details where email='$email'";
    $result = mysqli_query($con,$s);

    $num = mysqli_num_rows($result);

    if ($num == 1) {
        echo "Email already Registered";
    }
    else {
        $register = "Insert into user_details (fname, lname, email, password) values ('$fname','$lname','$email','$password')";
        mysqli_query($con, $register);
        echo "Registration Sucessful.";
    }
?>