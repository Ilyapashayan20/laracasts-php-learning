<?php

$config = require 'config.php';
$db = new Database($config['database']);
$heading = 'Notes';
$query = 'SELECT * FROM notes where user_id = 1';

$notes = $db->query($query)->get();


require "views/notes.view.php";