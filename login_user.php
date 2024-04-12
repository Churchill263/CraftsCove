<?php
session_start();
include("db.php");

$useremail = $userpassword ="";
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die("There is an error"); // or handle the case where submit is not set
} else {
    $user_name = $_POST["username"];
    $userpassword = $_POST["password"];

    // Use prepared statements to prevent SQL injection
    $query = "SELECT * FROM customer WHERE user_name = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $user_name);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 0) {
       echo 'user not found';
    } else {
        $row = $result->fetch_assoc();
        // Verify password
        if (!$userpassword == $row["password"]) {
            echo "Incorrect password or username"; 
        } else {
            $_SESSION["user_id"] = $row["user_id"];
            $_SESSION["user_name"]=$row["user_name"];
            header( "Location: index.php?msg=success");
                exit(); // Prevent further execution
    }
}
}
?>