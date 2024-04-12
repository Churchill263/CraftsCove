<?php
// include a connection file
include "db.php";

// collection of form data
if(isset($_POST["registrationForm"])){
    $first_name = $_POST["firstName"];
    $last_name = $_POST["lastName"];
    $user_name = $_POST["userName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmPassword"];
    
    if($password != $confirmpassword){
        header("register.php");
        exit();
    }
     
    $encrypted_password = password_hash($password, PASSWORD_DEFAULT);

    $sql_query = "INSERT INTO Customer (firstname, lastname, username, email, password) VALUES ('$first_name','$last_name','$user_name' '$email', '$password',)";

    if ($con->query($sql_query) === true) {
        // redirect to login page
        header("Location: login.php");
    } 
    else {
        // echo error 
        header("Location: login.php");
        echo "Error: " . $con->error;
    }

    // close database connection
    $con->close();
}
?>