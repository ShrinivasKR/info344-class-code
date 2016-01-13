<?php 
require_once 'connection.php'; 
require_once 'models/servermessages-model.php';

$nickname = $_GET['nickname'];
$content = $_GET['content'];

$conn = getConnection();
$serverMessages = new ServerMessages($conn);
$serverMessages->sendMessage($nickname, $content);
$messages = $serverMessages->fetchMessages();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>info344chat</title>
</head>

<body>
    <?php
    include 'views/messages.php';
    
    include 'views/chatbox.php';
    ?>

</body>

</html>