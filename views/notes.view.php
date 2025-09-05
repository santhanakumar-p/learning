<?php require BASE_PATH . '/views/partials/header.php'; ?>
<?php require BASE_PATH . '/views/partials/nav.php'; ?>
<?php require_once __DIR__ . '/../database.php'; ?>
<?php $config = require __DIR__ . '/../config.php'; ?>

<?php
$db = new Database($config['database']);
$notes = $db->query("SELECT * FROM `notes`")->fetchAll();
?>

<div class="page-content container">
    <h1 id="page-title">Dashboard</h1>

    <?php foreach ($notes as $note): ?>
        <li><?= htmlspecialchars($note['body']) ?></li>
    <?php endforeach; ?>

</div>

<?php require BASE_PATH . '/views/partials/footer.php'; ?>