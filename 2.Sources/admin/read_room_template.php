<div style="text-align=center;">
    <form action="Search.php" method="get">
        Search: <input type="text" name="search" />
        <input type="submit" name="ok" value="search" />
    </form>
</div>
<a href=""><button style='margin-left: 1070px;' type='button'>Add</button></a>
<?php
if($num>0){
 
    echo "<table class='table table-hover table-responsive table-bordered'>";
 
    // table headers
    echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>ID_LoaiPhong</th>";
        echo "<th>ID_TrangThaiPhong</th>";
        echo "<th>Action</th>";

    echo "</tr>";
 
    // loop through the user records
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
 
        // display user details
        echo "<tr>";
            echo "<td>{$ten_p}</td>";
            echo "<td>{$id_lp}</td>";
            echo "<td>{$id_ttp}</td>";
            echo "<td><a href=''>   Update</a>   |<a href=''> Delete</a> </td>";
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