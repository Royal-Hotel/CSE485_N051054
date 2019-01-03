<?php
// core configuration
include_once "../config/core.php";

// include login checker
include_once "login_checker.php";
 
// include classes
include_once '../config/database.php';
include_once '../objects/user.php';
 
if($_POST){

    // get database connection
    $database = new Database();
    $db = $database->getConnection();

    $id = $_GET["id"] ;

    mysqli_set_charset($db, 'UTF8');
    $query = "SELECT * FROM `users` WHERE `category`.`id`='$id'";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);
?>
<h1>Sửa Thông Tin Danh Mục</h1>
<form action="XuLyEdit.php" method="post">
<input type="hidden" name="ID" value="<?php echo $row['ID']?>">
Tên Danh Mục: <input type="text" name="Name" value="<?php echo $row['Name'];?>"><br>
<input type="submit" value="Cập Nhật Danh Mục">
</form>
}