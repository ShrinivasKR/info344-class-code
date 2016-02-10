<<<<<<< HEAD
<?php
class Zips{
=======
<?php 
class Zips {
>>>>>>> dd127347d12c8bb16a0f6d7fa4d2cd6133701c08
    protected $conn;
    
    public function __construct($conn) {
        $this->conn = $conn;
    }
    
    public function search($q) {
        $sql = 'select * from zips where zip=? or primary_city=?';
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute(array($q,$q));
<<<<<<< HEAD
        if (!$success) {
            trigger_error($stmt->errorInfo());
=======
        if (!$success) {            
            var_dump($stmt->errorInfo());
            return false;
>>>>>>> dd127347d12c8bb16a0f6d7fa4d2cd6133701c08
        } else {
            return $stmt->fetchAll();
        }
    }
}
?>