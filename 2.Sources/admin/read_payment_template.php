<div style="text-align=center;">
    <form action="Search.php" method="get">
        Search: <input type="text" name="search" />
        <input type="submit" name="ok" value="search" />
    </form>
</div>
<br>
<?php
if($num>0){
 
    echo "<table class='table table-hover table-responsive table-bordered'>";
 
    // table headers
    echo "<tr>";
        echo "<th>ID_Payment</th>";
        echo "<th>IDUser</th>";
        echo "<th>Name_User</th>";
        echo "<th>Name_Room</th>";
        echo "<th>Style_Room</th>";
        echo "<th>Price_Room</th>";
        echo "<th>Payment_Status</th>";
        echo "<th>Check_in</th>";
        echo "<th>Check_out</th>";
        echo "<th>Action</th>";

    echo "</tr>";
 
    // loop through the user records
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
 
        // display user details
        echo "<tr>";
            echo "<td>{$id_hd}</td>";
            echo "<td>{$id}</td>";
            echo "<td>{$firstname}</td>";
            echo "<td>{$ten_p}</td>";
            echo "<td>{$ten_lp}</td>";
            echo "<td>{$gia_lp}</td>";
            echo "<td>{$Trang_Thai_TT}</td>";
            echo "<td>{$check_in}</td>";
            echo "<td>{$check_out}</td>";
            echo "<td><a href=''>   Update</a>   |<a href=''> Delete</a> |<a href=''>  Print</a> </td>";
        echo "</tr>";
        }
 
    echo "</table>";
 
    $page_url="read_payment.php?";
    $total_rows = $room->countAll();
 
    // actual paging buttons
    include_once 'paging.php';
}
 
// tell the user there are no selfies
else{
    echo "<div class='alert alert-danger'>
        <strong>No payment found.</strong>
    </div>";
}
?>