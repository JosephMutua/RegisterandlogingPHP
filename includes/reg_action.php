<?php

if (isset($_POST['register-submit'])){
    require_once ('dbh-inc.php');

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];


    $allDataCorrect = true;
    $errormsg = "";

    if (!preg_match("/^[a-zA-Z]$/", $fname)
    {
        $allDataCorrect = false;
        $errormsg = $errormsg . "The first name of an individual should be contain only capital and small letters";
    }
    if (!preg_match("/^[a-zA-Z]$/", $lname))
    {
        $allDataCorrect = false;
        $errormsg = $errormsg . "The first name of an individual should be contain only capital and small letters";
    }
    if(!preg_match("/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/", $email)) // 1d
    {
        $allDataCorrect = false;
        $errMsg = $errMsg . "Email should contain @ character <br><br>"; 
    }
    
    if(!preg_match("/^[a-zA-Z0-9?!)]{8,}$/", $pwd)) // 1b
    {
        $allDataCorrect = false;
        $errMsg = $errMsg . "Password should be composed with at least 8 alphanumeric characters and ? ! symbol <br><br>"; 
    }

    if ($allDataCorrect)
    {
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
    else{
        header ("Location: ../register.php/?error=$errormsg");
    }

}
else {
    header ("Location: ../index.php");
}