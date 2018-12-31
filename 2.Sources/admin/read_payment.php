<?php
// core configuration
include_once "../config/core.php";
 
// check if logged in as admin
include_once "login_checker.php";
 
// include classes
include_once '../config/database.php';
include_once '../objects/payment.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// initialize objects
$payment = new Payment($db);
 
// set page title
$page_title = "Payment";
 
// include page header HTML
include_once "layout_head.php";
?>
<div style="text-align=center;">
    <form action="Search.php" method="get">
        Search: <input type="text" name="search" />
        <input type="submit" name="ok" value="search" />
    </form>
</div>
<br>
 <?php
echo "<div class='col-md-12'>";
 
    // read all users from the database
    $stmt = $payment->readAll($from_record_num, $records_per_page);
 
    // count retrieved users
    $num = $stmt->rowCount();
 
    // to identify page for paging
    $page_url="read_payment.php?";
 
    // include products table HTML template
    include_once "read_payment_template.php";
 
echo "</div>";
 
// include page footer HTML
include_once "layout_foot.php";
?>