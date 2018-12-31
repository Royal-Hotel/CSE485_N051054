<?php
// display the table if the number of users retrieved was greater than zero
if($num=0){

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

            echo "<td><a href=''>   Sửa</a>   |<a href=''> Xóa</a> </td>";
        echo "</tr>";
        }
 
    echo "</table>";
 
    $page_url="read_payment.php?";
    $total_rows = $payment->countAll();
 
    // actual paging buttons
    include_once 'paging.php';
}

//tell the user there are no selfies
else{
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
    echo "<div class='alert alert-danger'>
        <strong>No room found.</strong>
    </div>";
}
?>