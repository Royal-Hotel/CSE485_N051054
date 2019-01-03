<?php
// 'Room' object
class Room{
 
    // database connection and table name
    private $conn;
    private $table_name = "phong";
 
    // object properties
    public $id_p;
    public $ten_p;
    public $loaiphong;
    public $giaphong;
    public $status;
 
    // constructor
    public function __construct($db){
        $this->conn = $db;
    }
    
    // check if given ten_p exist in the database
    function nameExists(){

        // query to check if ten_p exists
        $query = "SELECT id_p, loaiphong, giaphong,status
                FROM " . $this->table_name . "
                WHERE ten_p = ?
                LIMIT 0,1";
    
        // prepare the query
        $stmt = $this->conn->prepare( $query );
    
        // sanitize
        $this->ten_p=htmlspecialchars(strip_tags($this->ten_p));
    
        // bind given ten_p value
        $stmt->bindParam(1, $this->ten_p);
    
        // execute the query
        $stmt->execute();
    
        // get number of rows
        $num = $stmt->rowCount();
    
        // if email exists, assign values to object properties for easy access and use for php sessions
        if($num>0){
    
            // get record details / values
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
            // assign values to object properties
            $this->id_p = $row['id_p'];
            $this->loaiphong = $row['loaiphong'];
            $this->giaphong = $row['giaphong'];
            $this->status = $row['status'];
    
            // return true because ten_p exists in the database
            return true;
        }
    
        // return false if ten_p does not exist in the database
        return false;
    }
    // create new Room record
    function create(){

        // insert query
        $query = "INSERT INTO " . $this->table_name . "
                SET
            ten_p = :ten_p,
            loaiphong = :loaiphong,
            giaphong = :giaphong,
            status = :status";
    
        // prepare the query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->ten_p=htmlspecialchars(strip_tags($this->ten_p));
        $this->loaiphong=htmlspecialchars(strip_tags($this->loaiphong));
        $this->giaphong=htmlspecialchars(strip_tags($this->giaphong));
        $this->status=htmlspecialchars(strip_tags($this->status));

        // bind the values
        $stmt->bindParam(':ten_p', $this->ten_p);
        $stmt->bindParam(':loaiphong', $this->loaiphong);
        $stmt->bindParam(':giaphong', $this->giaphong);
        $stmt->bindParam(':status', $this->status);
    
        // execute the query, also check if query was successful
        if($stmt->execute()){
            return true;
        }else{
            $this->showError($stmt);
            return false;
        }
    
    }
    public function showError($stmt){
        echo "<pre>";
            print_r($stmt->errorInfo());
        echo "</pre>";
    }

    function readAll($from_record_num, $records_per_page){
        // query to read all room records, with limit clause for pagination
        $query = "SELECT
                    id_p,
                    ten_p,
                    loaiphong,
                    giaphong,
                    status
                FROM " . $this->table_name . "
                ORDER BY id_p ASC
                LIMIT ?, ?";
    
        // prepare query statement
        $stmt = $this->conn->prepare( $query );
    
        // bind limit clause variables
        $stmt->bindParam(1, $from_record_num, PDO::PARAM_INT);
        $stmt->bindParam(2, $records_per_page, PDO::PARAM_INT);
    
        // execute query
        $stmt->execute();
    
        // return values
        return $stmt;
    }
    // used for paging room
    public function countAll(){

        // query to select all room records
        $query = "SELECT id_p FROM " . $this->table_name . "";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        // get number of rows
        $num = $stmt->rowCount();
    
        // return row count
        return $num;
    }
    
    function updateRoom(){
    
        // update query
        $query = "UPDATE
                    " . $this->table_name . "
                SET
                    loaiphong = :loaiphong,
                    giaphong = :giaphong,
                    status = :status
                WHERE
                    ten_p = :ten_p";
    
        // prepare the query/ chuẩn bị truy vấn
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->loaiphong=htmlspecialchars(strip_tags($this->loaiphong));
        $this->giaphong=htmlspecialchars(strip_tags($this->giaphong));
        $this->status=htmlspecialchars(strip_tags($this->status));
        $this->ten_p=htmlspecialchars(strip_tags($this->ten_p));
    
        // bind the values from the form/ liên kết các giá trị từ biểu mẫu
        $stmt->bindParam(':loaiphong', $this->loaiphong);
        $stmt->bindParam(':giaphong', $this->giaphong);
        $stmt->bindParam(':status', $this->status);
        $stmt->bindParam(':ten_p', $this->ten_p);
    
        // execute the query
        if($stmt->execute()){
            return true;
        }
    
        return false;
    }
    
    function deleteRoom(){
        
        // update query
        $query = "DELETE FROM
                    " . $this->table_name . "
                WHERE
                    ten_p = :ten_p";
    
        // prepare the query/ chuẩn bị truy vấn
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->ten_p=htmlspecialchars(strip_tags($this->ten_p));
    
        // bind the values from the form/ liên kết các giá trị từ biểu mẫu
        $stmt->bindParam(':ten_p', $this->ten_p);
    
        // execute the query
        if($stmt->execute()){
            return true;
        }
    
        return false;
    }
}