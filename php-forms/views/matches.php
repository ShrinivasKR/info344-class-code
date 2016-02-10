<h1>Possible Matches</h1>
<ul>
    <?php foreach($matches as $match): ?>
    <li>
<<<<<<< HEAD
        <?= htmlentities($match['primary_city']) ?>
=======
        <?= htmlentities($match['primary_city']) ?>,
>>>>>>> dd127347d12c8bb16a0f6d7fa4d2cd6133701c08
        <?= htmlentities($match['state']) ?>
        <?= htmlentities($match['zip']) ?>
        <?= htmlentities($match['country']) ?>
    </li>
    <?php endforeach; ?>
<<<<<<< HEAD
</ul>
    
=======
</ul>
>>>>>>> dd127347d12c8bb16a0f6d7fa4d2cd6133701c08
