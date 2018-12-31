<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "royal_hotel";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database) or die();

// Check connection
if(mysqli_connect_error())
{
    echo "Failed to connect mysql:".mysqli_connect_error();
}
// echo "wellcome";
?>
