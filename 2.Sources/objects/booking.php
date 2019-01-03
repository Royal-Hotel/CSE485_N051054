<?php
// 'user' object
class Booking{
 
    // database connection and table name
    private $conn;
    private $table_name = "datphong";
 
    // object properties
    public $id_dp;

    public $firstname;
    public $lastname;
    public $ten_lp;
    public $so_p;
    public $check_in;
    public $check_out;
    public $phone_number;
    public $email;
    public $statusBooking;
 
    // constructor
    public function __construct($db){
        $this->conn = $db;
    }
    
    // create new user record
    function create(){

        // insert query
        $query = "INSERT INTO " . $this->table_name . "
                SET
                id_dp = :id_dp,

                firstname = :firstname,
                lastname = :lastname,
                ten_lp = :ten_lp,
                so_p = :so_p,
                check_in = :check_in,
                check_out = :check_out,
                phone_number = :phone_number,
                email =:email,
                statusBooking =:statusBooking";
    
        // prepare the query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->id_dp=htmlspecialchars(strip_tags($this->id_dp));
        //$this->id_p=htmlspecialchars(strip_tags($this->id_p));
        $this->firstname=htmlspecialchars(strip_tags($this->firstname));
        $this->lastname=htmlspecialchars(strip_tags($this->lastname));
        $this->ten_lp=htmlspecialchars(strip_tags($this->ten_lp));
        $this->so_p=htmlspecialchars(strip_tags($this->so_p));
        $this->check_in=htmlspecialchars(strip_tags($this->check_in));
        $this->check_out=htmlspecialchars(strip_tags($this->check_out));
        $this->phone_number=htmlspecialchars(strip_tags($this->phone_number));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->statusBooking=htmlspecialchars(strip_tags($this->statusBooking));

        // bind the values
        $stmt->bindParam(':id_dp', $this->id_dp);
        //$stmt->bindParam(':id_p', $this->id_p);
        $stmt->bindParam(':firstname', $this->firstname);
        $stmt->bindParam(':lastname', $this->lastname);
        $stmt->bindParam(':ten_lp', $this->ten_lp);
        $stmt->bindParam(':so_p', $this->so_p);
        $stmt->bindParam(':check_in', $this->check_in);
        $stmt->bindParam(':check_out', $this->check_out);
        $stmt->bindParam(':phone_number', $this->phone_number);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':statusBooking', $this->statusBooking);
    
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
                    id_dp,
                    
                    firstname,
                    lastname,
                    ten_lp,
                    so_p,
                    check_in,
                    check_out,
                    phone_number,
                    email,
                    statusBooking
                    FROM " . $this->table_name . "
                    ORDER BY id_dp ASC
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
        $query = "SELECT id_dp FROM " . $this->table_name . "
            WHERE ";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        // get number of rows
        $num = $stmt->rowCount();
    
        // return row count
        return $num;
    }
    function emailExists(){
    
        // query to check if email exists
        $query = "SELECT  id_dp,
                
                firstname,
                lastname,
                ten_lp,
                so_p,
                check_in,
                check_out,
                phone_number,
                statusBooking
                FROM " . $this->table_name . "
                WHERE email = ?
                LIMIT 0,1";
    
        // prepare the query
        $stmt = $this->conn->prepare( $query );
    
        // sanitize
        $this->email=htmlspecialchars(strip_tags($this->email));
    
        // bind given email value
        $stmt->bindParam(1, $this->email);
    
        // execute the query
        $stmt->execute();
    
        // get number of rows
        $num = $stmt->rowCount();
    
        // if email exists, assign values to object properties for easy access and use for php sessions
        if($num>0){
    
            // get record details / values
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
            // assign values to object properties
            $this->id_dp = $row['id_dp'];
            //$this->id_p = $row['id_p'];
            $this->firstname = $row['firstname'];
            $this->lastname = $row['lastname'];
            $this->ten_lp = $row['ten_lp'];
            $this->so_p = $row['so_p'];
            $this->check_in = $row['check_in'];
            $this->check_out = $row['check_out'];
            $this->phone_number = $row['phone_number'];
            $this->statusBooking = $row['statusBooking'];
    
            // return true because email exists in the database
            return true;
        }
    
        // return false if email does not exist in the database
        return false;
    }
    
    function updateStatus(){
    
        // update query
        $query = "UPDATE
                    " . $this->table_name . "
                SET
                    status = :status
                WHERE
                    email = :email";
    
        // prepare the query/ chuẩn bị truy vấn
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->status=htmlspecialchars(strip_tags($this->status));
        $this->email=htmlspecialchars(strip_tags($this->email));
    
        // bind the values from the form/ liên kết các giá trị từ biểu mẫu
        $stmt->bindParam(':status', $this->status);
        $stmt->bindParam(':email', $this->email);
    
        // execute the query
        if($stmt->execute()){
            return true;
        }
    
        return false;
    }
}