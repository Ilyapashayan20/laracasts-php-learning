<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;

$db->query('DELETE from notes WHERE id = :id', [
    'id' => $_POST['id']
]);

header('location: /notes');
exit();
