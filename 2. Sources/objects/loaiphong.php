<?php
// 'Payment' object
class StyleRoom{
 
    // database connection and table name
    private $conn;
    private $table_name = "loaiphong";
 
    // object properties
    public $id_lp;
    public $ten_lp;
    public $gia_lp;
    public $ghi_chu;
    public $img;

    // constructor
    public function __construct($db){
        $this->conn = $db;
    }
}