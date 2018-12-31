<?php
// 'user' object
class Contact{
 
    // database connection and table name
    private $conn;
    private $table_name = "contact";
 
    // object properties
    public $id_ct;
    public $id;
    public $name;
    public $email;
    public $massage;
 
    // constructor
    public function __construct($db){
        $this->conn = $db;
    }
    // // check if given email exist in the database
    // function emailExists(){
    
    //     // query to check if email exists
    //     $query = "SELECT id_ct, id, name, email, massage
    //             FROM " . $this->table_name . "
    //             WHERE email = ?
    //             LIMIT 0,1";
    
    //     // prepare the query
    //     $stmt = $this->conn->prepare( $query );
    
    //     // sanitize
    //     $this->email=htmlspecialchars(strip_tags($this->email));
    
    //     // bind given email value
    //     $stmt->bindParam(1, $this->email);
    
    //     // execute the query
    //     $stmt->execute();
    
    //     // get number of rows
    //     $num = $stmt->rowCount();
    
    //     // if email exists, assign values to object properties for easy access and use for php sessions
    //     if($num>0){
    
    //         // get record details / values
    //         $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    //         // assign values to object properties
    //         $this->id_ct = $row['id_ct'];
    //         $this->id = $row['id'];
    //         $this->name = $row['name'];
    //         $this->email = $row['email'];
    //         $this->massage = $row['massage'];
    
    //         // return true because email exists in the database
    //         return true;
    //     }
    
    //     // return false if email does not exist in the database
    //     return false;
    // }
    // create new user record
    function create(){
    
        // insert query
        $query = "INSERT INTO " . $this->table_name . "
                SET
            id_ct = :id_ct,
            id = :id,
            name = :name,
            email = :email,
            message = :message";
    
        // prepare the query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->id_ct=htmlspecialchars(strip_tags($this->id_ct));
        $this->id=htmlspecialchars(strip_tags($this->id));
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->cmessage=htmlspecialchars(strip_tags($this->message));
    
        // bind the values
        $stmt->bindParam(':id_ct', $this->id_ct);
        $stmt->bindParam(':id', $this->id);
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
    public function readAll($from_record_num, $records_per_page){
    
        // query to read all user records, with limit clause for pagination
        $query = "SELECT
                    id_ct,
                    id,
                    name,
                    email,
                    massage
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
    // used for paging contact
    public function countAll(){

        // query to select all user records
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