<?php
// display the table if the number of booking retrieved was greater than zero
if($num>0){
 
    echo "<table class='table table-hover table-responsive table-bordered'>";
 
    // table headers
    echo "<tr>
        <th>Name</th>
        <th>Style Room</th>
        <th>Number Room</th>
        <th>Check In</th>
        <th>Check Out</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Status</th>
    </tr>";
 
    // loop through the booking records
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
 
        // display booking details
        echo "<tr>
            <td>{$firstname}</td>
            <td>{$ten_lp}</td>
            <td>{$so_p}</td>
            <td>{$check_in}</td>
            <td>{$check_out}</td>
            <td>{$phone_number}</td>
            <td>{$email}</td>
            <td>{$statusBooking}</td>
        </tr>";
        }
 
    echo "</table>";
 
    $page_url="read_booking.php?";
    $total_rows = $booking->countAll();
 
    // actual paging buttons
    include_once 'paging.php';
}
 
// tell the booking there are no selfies
else{
    echo "<div class='alert alert-danger'>
        <strong>No booking found.</strong>
    </div>";
}
?>