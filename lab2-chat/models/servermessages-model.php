<?php
class ServerMessages{
    protected $conn;
    
    public function __construct($conn) {
        $this->conn = $conn;
    }
    
    public function fetchMessages() {
        $sql = '(SELECT * FROM message ORDER BY id DESC LIMIT 10) ORDER BY id ASC';
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute();
        if (!$success) {
            trigger_error($stmt->errorInfo());
        } else {
            return $stmt->fetchAll();
        }
    }
    
    public function sendMessage($nickname, $content) {
        $nickname = $_GET['nickname'];
        $content = $_GET['content'];
        if ($nickname == NULL) {
            $nickname = 'anonymous';
        }
        $sql = 'INSERT INTO message (nickname, content) VALUES (?, ?)';
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute(array($nickname,$content));
        if (!$success) {
            var_dump($stmt->errorInfo());
        } else {
            return $stmt->fetchAll();
        }
    }
}
?>