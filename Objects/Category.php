<?php

class Category {
    // Database connection and table name
    private $conn;
    private $table_name = "categories";

    // Object properties
    public $cat_id;
    public $cat_title;
    public $cat_desc;

    public function __construct($db)
    {
        $this->conn = $db;
    }



    function read() {
        // select all data
        $query = "SELECT * FROM " . $this->table_name . "";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    
        return $stmt;
    }
}