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
        echo "<th>Name</th>";
        echo "<th>Email</th>";
        echo "<th>Message</th>";
        echo "<th>Action</th>";

    echo "</tr>";
 
    // loop through the contact records
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
 
        // display contact details
        echo "<tr>";
            echo "<td>{$name}</td>";
            echo "<td>{$email}</td>";
            echo "<td>{$message}</td>";
            echo "<td><div><a href='Del_ct.php'> Delete</a>   |<a href=''> Rep</a> </td>";
        echo "</tr>";
        }
 
    echo "</table>";
 
    $page_url="read_contact.php?";
    $total_rows = $contact->countAll();
 
    // actual paging buttons
    include_once 'paging.php';
}
 
// tell the contact there are no selfies
else{
    echo "<div class='alert alert-danger'>
        <strong>No contact found.</strong>
    </div>";
}
?>