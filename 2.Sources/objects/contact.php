<?php
// 'Contact' object
class Contact{
 
    // database connection and table name
    private $conn;
    private $table_name = "contact";
 
    // object properties
    public $id_ct;
    public $name;
    public $email;
    public $message;
 
    // constructor
    public function __construct($db){
        $this->conn = $db;
    }
    
    // create new Room record
    function create(){

        // insert query
        $query = "INSERT INTO " . $this->table_name . "
                SET
                name = :name,
                email = :email,
                message = :message";
    
        // prepare the query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->message=htmlspecialchars(strip_tags($this->message));

        // bind the values
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':message', $this->message);
    
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
                    id_ct,
                    name,
                    email,
                    message
                FROM " . $this->table_name . "
                ORDER BY id_ct DESC
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
        $query = "SELECT id_ct FROM " . $this->table_name . "";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        // get number of rows
        $num = $stmt->rowCount();
    
        // return row count
        return $num;
    }
}