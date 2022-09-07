<?php

if (isset($_POST['register-submit'])){
    require_once ('dbh-inc.php');

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $sql = 'SELECT * FROM user_details WHERE email = ?;';
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt,$sql)){

        echo "SQL statement failed to excute.";

    }
    else {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_num_rows($result);

        if ($row > 0){
            echo 'User exists';
            
        }
        else {
            $sql = 'INSERT INTO user_details(Fname,Lname,email,password) VALUES (?,?,?,?);';
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt,$sql)){
                echo 'Database error when inserting data';
            }
            else{
                mysqli_stmt_bind_param($stmt, "ssss", $fname, $lname, $email, $pwd);
                mysqli_stmt_execute($stmt);
                header('Location: ../index.php');
            }
        }
    }



}
else {
    header ("Location: ../index.php");
}