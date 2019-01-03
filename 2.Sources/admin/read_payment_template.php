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
    echo "<tr>
        <th>ID Payment</th>
        <th>Name </th>
        <th>Name Room</th>
        <th>Style Room</th>
        <th>Number Room</th>
        <th>Check in</th>
        <th>Check out</th>
        <th>Phone</th>
        <th>Price Room</th>
        <th>Payment Status</th>
    </tr>";
 
    // loop through the user records
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
 
        // display user details
        echo "<tr>
            <td>{$id_hd}</td>
            <td>{$firstname}</td>
            <td>{$ten_p}</td>
            <td>{$loaiphong}</td>
            <td>{$so_p}</td>
            <td>{$check_in}</td>
            <td>{$check_out}</td>
            <td>{$phone_number}</td>
            <td>{$giaphong}</td>
            <td>{$Trang_Thai_TT}</td>
        </tr>";
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