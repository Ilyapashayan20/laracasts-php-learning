<?php

require 'functions.php';
// require 'router.php';


// class Person  { 
//     public $name;
//     public $age;

//     public function breathe(){
//         echo  $this->name . ' is breathing';
//     }
// }

// $person = new Person();

// $person->name = 'Ilya';
// $person->age = 20;
// $person->breathe();

class Database
{

    public $connection;

    public function __construct()
    {

        $dsn = "mysql:host=localhost;port=3306;dbname=demo_db;charset=utf8mb4";

        $this->connection = new PDO($dsn, 'root');

    }
    public function query($query)
    {

        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement->fetchAll();


    }
}


$db = new Database();

$posts = $db->query("SELECT * FROM posts where id > 1");


foreach ($posts as $post) {
    echo '<li>' . $post['title'] . '</li>';
}