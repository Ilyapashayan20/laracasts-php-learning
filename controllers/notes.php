<?php

$config = require 'config.php';
$db = new Database($config['database']);
$heading = 'Notes';
$query = 'SELECT * FROM notes';

$notes = $db->query($query)->fetchAll();


require "views/notes.view.php";