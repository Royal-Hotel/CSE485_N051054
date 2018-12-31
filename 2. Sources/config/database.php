<?php
// used to get mysql database connection
class Database{
 
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "royal_hotel";
    private $username = "root";
    private $password = "";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "wellcome";
?>