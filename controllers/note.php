<?php

$config = require 'config.php';
$db = new Database($config['database']);
$heading = 'Note';

$query = 'SELECT * FROM notes where id =  :id';


$note = $db->query($query,['id' => $_GET['id']])->fetch();



require "views/note.view.php";