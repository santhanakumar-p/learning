<?php

class Database
{
    public $connection;
    public function __construct()
    {
        $host = 'localhost';
        $db   = 'my_app';
        $user = 'root';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

        $this->connection = new PDO($dsn, $user);
    }

    public function query($query) {
        
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}
