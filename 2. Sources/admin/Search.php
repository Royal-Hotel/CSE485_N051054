<?php
// Nếu người dùng submit form thì thực hiện
if (isset($_REQUEST['ok'])) 
{
    // Gán hàm addslashes để chống sql injection
    $search = addslashes($_GET['search']);

    // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
    if (empty($search)) {
        echo "Yeu cau nhap du lieu vao o trong";
    } 
    else
    {
        // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
        $query = "select * from users where username like '%$search%'";

        // Kết nối sql
        include_once "../config/database.php";

        // Thực thi câu truy vấn
        $sql = mysql_query($query);

        // Đếm số đong trả về trong sql.
        $num = mysql_num_rows($sql);

        // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
        if ($num > 0 && $search != "") 
        {
            echo "<table class='table table-hover table-responsive table-bordered'>";
            
            // table headers
            echo "<tr>";
                echo "<th>Firstname</th>";
                echo "<th>Lastname</th>";
                echo "<th>Email</th>";
                echo "<th>Contact Number</th>";
                echo "<th>Access Level</th>";
                echo "<th>Action</th>";
        
            echo "</tr>";
            
            // loop through the user records
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                extract($row);
            
                // display user details
                echo "<tr>";
                    echo "<td>{$firstname}</td>";
                    echo "<td>{$lastname}</td>";
                    echo "<td>{$email}</td>";
                    echo "<td>{$contact_number}</td>";
                    echo "<td>{$access_level}</td>";
                    echo "<td><button> Update </button> <button> Delete </button> </td>";
                echo "</tr>";
                }
            
            echo "</table>";
            
            $page_url="read_users.php?";
            $total_rows = $user->countAll();
            
            // actual paging buttons
            include_once 'paging.php';
        }
        
        else {
            echo "Khong tim thay ket qua!";
        }
    }
}
?>   