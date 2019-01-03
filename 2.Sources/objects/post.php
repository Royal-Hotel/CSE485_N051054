<?php
// 'news' object
class Post{
 
    // database connection and table name
    private $conn;
    private $table_name = "news";
 
    // object properties
    public $id_news;
    public $title;
    public $content;
    public $images;

 
    // constructor
    public function __construct($db){
        $this->conn = $db;
    }
    
    // create new user record
    function create(){

        // insert query
        $query = "INSERT INTO " . $this->table_name . "
                SET
                id_news = :id_news,

                content = :content,
                images = :images";
    
        // prepare the query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->id_news=htmlspecialchars(strip_tags($this->id_news));
        //$this->id_p=htmlspecialchars(strip_tags($this->id_p));

        $this->content=htmlspecialchars(strip_tags($this->content));
        $this->images=htmlspecialchars(strip_tags($this->images));

        // bind the values
        $stmt->bindParam(':id_news', $this->id_news);
        //$stmt->bindParam(':id_p', $this->id_p);
        $stmt->bindParam(':content', $this->content);
        $stmt->bindParam(':images', $this->images);
    
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
                    id_news,
                    
                    title,
                    content,
                    images,
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
        $query = "SELECT id_news FROM " . $this->table_name . "
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
    function nameExists(){
    
        // query to check if email exists
        $query = "SELECT  id_news,
                content,
                images,
                FROM " . $this->table_name . "
                WHERE title = ?
                LIMIT 0,1";
    
        // prepare the query
        $stmt = $this->conn->prepare( $query );
    
        // sanitize
        $this->title=htmlspecialchars(strip_tags($this->title));
    
        // bind given email value
        $stmt->bindParam(1, $this->title);
    
        // execute the query
        $stmt->execute();
    
        // get number of rows
        $num = $stmt->rowCount();
    
        // if email exists, assign values to object properties for easy access and use for php sessions
        if($num>0){
    
            // get record details / values
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
            // assign values to object properties
            $this->id_news = $row['id_news'];
            //$this->id_p = $row['id_p'];
            $this->content = $row['content'];
            $this->images = $row['images'];
    
            // return true because email exists in the database
            return true;
        }
    
        // return false if email does not exist in the database
        return false;
    }
}