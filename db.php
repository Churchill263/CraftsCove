<?php
$conn=new mysqli("localhost", "root", "", "website_db", 4306);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());

}

?>
