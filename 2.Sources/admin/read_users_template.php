<div style="text-align=center;">
    <form action="Search.php" method="get">
        Search: <input type="text" name="search" />
        <input type="submit" name="ok" value="search" />
    </form>
</div>
<a href="add_user.php"><button style='margin-left: 940px;' type='button'>Add</button></a>
<a href='update_user.php'><button  type='button'>Update</button></a>  
<a href='delete_user.php'><button  type='button'>Delete</button></a>
<?php
if($num>0){
 
    echo "<table class='table table-hover table-responsive table-bordered'>";
    
    // table headers
    echo "<tr>
        <th>Firstname</th>
        <th>Lastname</th>   
        <th>Email</th>
        <th>Contact Number</th>
        <th>Access Level</th>
    </tr>";
 
    // loop through the user records
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
 
        // display user details
        echo "<tr>
            <td>{$firstname}</td>
            <td>{$lastname}</td>
            <td>{$email}</td>
            <td>{$contact_number}</td>
            <td>{$access_level}</td>
        </tr>";
        }
 
    echo "</table>";
 
    $page_url="read_users.php?";
    $total_rows = $user->countAll();
 
    // actual paging buttons
    include_once 'paging.php';
}
 
// tell the user there are no selfies
else{
    echo "<div class='alert alert-danger'>
        <strong>No users found.</strong>
    </div>";
}
?>