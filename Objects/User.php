<?php

class User {

    // Database connection and table name
    private $conn;
    private $table_name = "";


    public function __construct($db)
    {
        $this->conn = $db;
    }

    
}