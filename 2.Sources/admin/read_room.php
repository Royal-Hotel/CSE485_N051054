<?php
// core configuration
include_once "../config/core.php";
 
// check if logged in as admin
include_once "login_checker.php";
 
// include classes
include_once '../config/database.php';
include_once '../objects/room.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// initialize objects
$room = new Room($db);
 
// set page title
$page_title = "Rooms";
 
// include page header HTML
include_once "layout_head.php";

echo "<div class='col-md-12'>";
 
    // read all users from the database
    $stmt = $room->readAll($from_record_num, $records_per_page);
 
    // count retrieved users
    $num = $stmt->rowCount();
 
    // to identify page for paging
    $page_url="read_room.php?";
 
    // include products table HTML template
    include_once "read_room_template.php";
 
echo "</div>";
 
// include page footer HTML
include_once "layout_foot.php";
?>