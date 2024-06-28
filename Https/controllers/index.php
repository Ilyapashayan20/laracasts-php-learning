<?php

$_SESSION['name'] = 'Ilya';

view("index.view.php",[
    'heading' => 'Home'
]);