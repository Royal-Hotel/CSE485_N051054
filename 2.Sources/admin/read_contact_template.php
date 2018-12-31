<?php
// display the table if the number of users retrieved was greater than zero
if($num>0){
 
    echo "<table class='table table-hover table-responsive table-bordered'>";
 
    // table headers
    echo "<tr>";
        echo "<th>ID_Contact";
        echo "<th>ID_User</th>";
        echo "<th>Name</th>";
        echo "<th>Email</th>";
        echo "<th>Massage</th>";
    echo "</tr>";
 
    // loop through the contact records
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
 
        // display user details
        echo "<tr>";
            echo "<td>{$id_ct}</td>";
            echo "<td>{$id}</td>";
            echo "<td>{$name}</td>";
            echo "<td>{$email}</td>";
            echo "<td>{$massage}</td>";
        echo "</tr>";
        }
 
    echo "</table>";
 
    $page_url="read_contact.php?";
    $total_rows = $contact->countAll();
 
    // actual paging buttons
    include_once 'paging.php';
}
 
// tell the user there are no selfies
else{
    echo "<div class='alert alert-danger'>
        <strong>No contact found.</strong>
    </div>";
}
?>