<h1>INFO 344 Chat</h1>
<ul>
    <?php foreach($messages as $message): ?>
    <li>
        <?= htmlentities($message['nickname']) ?>
        <?= htmlentities($message['content']) ?>
        <?= htmlentities($message['sent_timestamp']) ?>
    </li>
    <?php endforeach; ?>
</ul>