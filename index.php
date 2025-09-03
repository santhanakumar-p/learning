<?php

define('BASE_PATH', __DIR__);

// require BASE_PATH . '/routes.php';

require __DIR__ . '/database.php';

$db = new Database();
$posts = $db->query("SELECT * FROM `posts`")->fetchAll(PDO::FETCH_ASSOC);

print_r($posts);
