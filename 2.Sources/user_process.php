<?php 
    include("connection.php");
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $msg = $_REQUEST['message'];
    

    //insert data to table

    $query = mysqli_query($conn,"INSERT INTO `contact` (name,email,message) VALUE('$name','$email','$msg')") or die(mysqli_error($conn));

    mysqli_close($conn);

    header("location:contact-us.php?note=success");