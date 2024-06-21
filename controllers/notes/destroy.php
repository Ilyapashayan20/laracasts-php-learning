<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 1;

$db->query('DELETE from notes WHERE id = :id', [
    'id' => $_POST['id']
]);

header('location: /notes');
exit();
