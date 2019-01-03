<?php
// 'Payment' object
class Payment{
 
    // database connection and table name
    private $conn;
    private $table_name = "hoadon";
 
    // object properties
    public $id_hd;
    public $id;
    public $id_p;
    public $id_dp;
    public $firstname;
    public $ten_p;
    public $loaiphong;
    public $so_p;
    public $check_in;
    public $check_out;
    public $phone_number;
    public $giaphong;
    public $Trang_Thai_TT;

    // constructor
    public function __construct($db){
        $this->conn = $db;
    }
   
    function create(){
    
        // insert query
        $query = "SELECT hd.id_hd , dp.firstname, dp.ten_p, p.loaiphong, dp.so_p, dp.check_in, dp.check_out, dp.phone_number, p.giaphong, hd.Trang_thai_TT 
            FROM hoadon hd inner join datphong dp on hd.id_dp = u.id_dp
                inner join phong p on dp.id_p=p.id_p  
                ORDER BY id_hd ASC  LIMIT ?, ?";
        // prepare the query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->id_hd=htmlspecialchars(strip_tags($this->id_hd));
        $this->id=htmlspecialchars(strip_tags($this->id));
        $this->firstname=htmlspecialchars(strip_tags($this->firstname));
        $this->id_p=htmlspecialchars(strip_tags($this->id_p));
        $this->id_dp=htmlspecialchars(strip_tags($this->id_dp));
        $this->ten_p=htmlspecialchars(strip_tags($this->ten_p));
        $this->loaiphong=htmlspecialchars(strip_tags($this->loaiphong));
        $this->so_p=htmlspecialchars(strip_tags($this->so_p));
        $this->phone_number=htmlspecialchars(strip_tags($this->phone_number));
        $this->Trang_Thai_TT=htmlspecialchars(strip_tags($this->Trang_Thai_TT));
        $this->check_in=htmlspecialchars(strip_tags($this->check_in));
        $this->check_out=htmlspecialchars(strip_tags($this->giaphong));
        $this->giaphong=htmlspecialchars(strip_tags($this->giaphong));

        // bind the values
        $stmt->bindParam(':id_hd', $this->id_hd);
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':firstname', $this->firstname);
        $stmt->bindParam(':id_p', $this->id_p);
        $stmt->bindParam(':Trang_Thai_TT', $this->Trang_Thai_TT);
        $stmt->bindParam(':check_in', $this->check_in);
        $stmt->bindParam(':check_out', $this->check_out);
        $stmt->bindParam(':id_dp', $this->id_dp);
        $stmt->bindParam(':loaiphong', $this->loaiphong);
        $stmt->bindParam(':ten_p', $this->ten_p);
        $stmt->bindParam(':so_p', $this->so_p);
        $stmt->bindParam(':phone_number', $this->phone_number);
        $stmt->bindParam(':giaphong', $this->giaphong);
    
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
                    id_hd,
                    firstname,
                    ten_p,
                    loaiphong,
                    so_p,
                    check_in,
                    check_out,
                    phone_number,
                    giaphong,
                    Trang_thai_TT
                FROM " . $this->table_name . "
                ORDER BY id_hd ASC
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