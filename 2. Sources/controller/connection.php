<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "royal_hotel";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "wellcome";
?>
<?php
    $res = mysqli_query($conn,"SELECT * FROM loaiphong");
    echo "<table>";
    while($row=mysqli_fetch_array($res))
    {
        echo "<tr>";
        echo "<td>"; ?> <img src="<?php echo $row["img"]; ?>" height="200" witdh="200"> <?php echo "</td>";
        echo "<td>"; echo $row["loaiphong"]; echo "    giá   "; echo $row["giaphong"]; echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>
