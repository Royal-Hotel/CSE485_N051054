<?php
// display the table if the number of booking retrieved was greater than zero
if($num>0){
 
    echo "<table class='table table-hover table-responsive table-bordered'>";
 
    // table headers
    echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>StyleRoom</th>";
        echo "<th>NumberRoom</th>";
        echo "<th>Check In</th>";
        echo "<th>Check Out</th>";
        echo "<th>Phone</th>";
        echo "<th>Email</th>";
        echo "<th>Status</th>";
        echo "<th>Action</th>";

    echo "</tr>";
 
    // loop through the booking records
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
 
        // display booking details
        echo "<tr>";
            echo "<td>{$firstname}</td>";
            echo "<td>{$ten_lp}</td>";
            echo "<td>{$so_p}</td>";
            echo "<td>{$check_in}</td>";
            echo "<td>{$check_out}</td>";
            echo "<td>{$phone_number}</td>";
            echo "<td>{$email}</td>";
            echo "<td>{$statusBooking}</td>";
            echo "<td>
                <a href='read_payment.php'>Yes</a> | <a href=''> No</a>
            </td>";
        echo "</tr>";
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