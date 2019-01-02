<?php
// 'Payment' object
class Payment{
 
    // database connection and table name
    private $conn;
    private $table_name = "hoadon";
 
    // object properties
    public $id_hd;
    public $id;
    public $firstname;
    public $id_p;
    public $ten_p;
    public $ten_lp;
    public $gia_lp;
    public $Trang_Thai_TT;
    public $check_in;
    public $check_out;

    // constructor
    public function __construct($db){
        $this->conn = $db;
    }
   
    function create(){
    
        // insert query
        $query = "INSERT INTO " . $this->table_name . "
                SET
            id_hd = :id_hd,
            id = :id,
            firstname = :firstname ,
            id_p = :id_p,
            Trang_Thai_TT = :Trang_Thai_TT,
            check_in = :check_in,
            check_out = :check_out";

        // prepare the query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->id_hd=htmlspecialchars(strip_tags($this->id_hd));
        $this->id=htmlspecialchars(strip_tags($this->id));
        $this->firstname=htmlspecialchars(strip_tags($this->firstname));
        $this->id_p=htmlspecialchars(strip_tags($this->id_p));
        $this->Trang_Thai_TT=htmlspecialchars(strip_tags($this->Trang_Thai_TT));
        $this->check_in=htmlspecialchars(strip_tags($this->check_in));
        $this->check_out=htmlspecialchars(strip_tags($this->check_out));

        // bind the values
        $stmt->bindParam(':id_hd', $this->id_hd);
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':firstname', $this->firstname);
        $stmt->bindParam(':id_p', $this->id_p);
        $stmt->bindParam(':Trang_Thai_TT', $this->Trang_Thai_TT);
        $stmt->bindParam(':check_in', $this->check_in);
        $stmt->bindParam(':check_out', $this->check_out);
    
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
    // read all user records
    function readAll($from_record_num, $records_per_page){
    
        // query to read all user records, with limit clause for pagination
        $query = "SELECT
            hd.id_hd , u.id, u.firstname, p.ten_p, lp.ten_lp, lp.gia_lp, hd.Trang_Thai_TT, dp.check_in, dp.check_out 
            FROM hoadon hd inner join users u on hd.id = u.id 
                inner join datphong dp on hd.id_dp = dp.id_dp 
                inner join phong p on hd.id_p = p.id_p 
                inner join loaiphong lp on hd.id_lp = lp.id_lp
                ORDER BY id_hd ASC  LIMIT ?, ?";
    
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
    // used for paging users
    public function countAll(){
    
        // query to select all user records
        $query = "SELECT id_hd FROM " . $this->table_name . "";
    
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