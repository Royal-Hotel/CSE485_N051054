<?php

class Search{
    private $conn;
    public $search;
    //public $search = addslashes($_GET['search']);

    // constructor
    public function __construct($db){
        $this->conn = $db;
    }

    function SearchUser(){
        // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
        $query = $query = "SELECT * FROM " . $this->table_name . "
            where firstname like '%$search%'";

        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        // get number of rows
        $num = $stmt->rowCount();
    
        // return row count
        return $num;
    }

    function SearchRoom(){
        // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
        $query = "select * from phong where ten_p like '%$search%'";
    }

    function SearchContact(){
        // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
        $query = "select * from contact where name like '%$search%'";
    }
    
    function SearchPayment(){
        // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
        $query = "select * from hoadon where Ten_KH like '%$search%'";
    }
}