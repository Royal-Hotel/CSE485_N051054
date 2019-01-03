<div style="text-align=center;">
    <form action="Search.php" method="get">
        Search: <input type="text" name="search" />
        <input type="submit" name="ok" value="search" />
    </form>
</div>
<a href="add_room.php"><button style='margin-left: 940px;' type='button'>Add</button></a>
<a href='update_room.php'><button  type='button'>Update</button></a>  
<a href='delete_room.php'><button  type='button'>Delete</button></a>
<?php
if($num>0){
 
    echo "<table class='table table-hover table-responsive table-bordered'>";
 
    // table headers
    echo "<tr>";
        echo "<th>ID Room</th>";
        echo "<th>Name</th>";
        echo "<th>Style Room</th>";
        echo "<th>Room Rates</th>";
        echo "<th>Status Room</th>";

    echo "</tr>";
 
    // loop through the user records
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
 
        // display user details
        echo "<tr>";
            echo "<td>{$id_p}</td>";
            echo "<td>{$ten_p}</td>";
            echo "<td>{$loaiphong}</td>";
            echo "<td>{$giaphong}</td>";
            echo "<td>{$status}</td>";
        echo "</tr>";
        }
 
    echo "</table>";
 
    $page_url="read_room.php?";
    $total_rows = $room->countAll();
 
    // actual paging buttons
    include_once 'paging.php';
}
 
// tell the user there are no selfies
else{
    echo "<div class='alert alert-danger'>
        <strong>No room found.</strong>
    </div>";
}
?>