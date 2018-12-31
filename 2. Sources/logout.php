<?php
// core configuration
include_once "config/core.php";
 
// destroy session, it will remove ALL session settings
session_destroy();
close();
  
//redirect to login page
header("Location:index.php");
?>