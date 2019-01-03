<?php
    public function deleteBooking(){
        $query = "DELETE FROM
                    " . $this->table_name . "
                WHERE
                    status=:status,
                    email = :email";
    
        // prepare the query/ chuẩn bị truy vấn
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->statusBooking=htmlspecialchars(strip_tags($this->statusBooking));
        $this->email=htmlspecialchars(strip_tags($this->email));
    
        // bind the values from the form/ liên kết các giá trị từ biểu mẫu
        $stmt->bindParam(':statusBooking', $this->statusBooking);
        $stmt->bindParam(':email', $this->email);
    
        // execute the query
        if($stmt->execute()){
            return true;
        }
    
        return false;
    }
?>
