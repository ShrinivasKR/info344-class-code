<<<<<<< HEAD
<?php
=======
<?php 
>>>>>>> dd127347d12c8bb16a0f6d7fa4d2cd6133701c08
function getConnection() {
    require_once 'secret/db-credentials.php';
    
    try {
        $conn = new PDO("mysql:host={$dbHost};dbname={$dbDatabase}", 
<<<<<<< HEAD
            $dbUser, $dbPassword);
        
        return $conn;
=======
              $dbUser, $dbPassword);
        
        return $conn;
        
>>>>>>> dd127347d12c8bb16a0f6d7fa4d2cd6133701c08
    } catch(PDOException $e) {
        die('Could not connect to database ' . $e);
    }
}

?>