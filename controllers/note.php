<?php

$config = require 'config.php';
$db = new Database($config['database']);
$heading = 'Note';

$query = 'SELECT * FROM notes where id = :id';


$note = $db->query($query, [
    'id' => $_GET['id']
])->fetch();


if (! $note) {
    abort(Response::NOT_FOUND);
}

$currentUserId= 1;

if ($note['user_id'] !== $currentUserId) {
    abort(Response::FORBIDDEN);
}



require "views/note.view.php";