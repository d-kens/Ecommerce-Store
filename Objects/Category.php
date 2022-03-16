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

    public function __destruct()
    {
        $this->conn = null;
    }



    function read() {
        // select all data
        $query = "SELECT * FROM " . $this->table_name . "";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    
        return $stmt;
    }

    function readById(){
        // select query
        $query = "SELECT * FROM ". $this->table_name ." WHERE cat_id = ?";

        // prepare statemt
        $stmt = $this->conn->prepare($query);

        // sanitize values
        $this->cat_id = htmlspecialchars(strip_tags($this->cat_id));

        // bind parameters
        $stmt->bindParam(1, $this->cat_id);

        // execute query
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->cat_title = $row['cat_title'];
        $this->cat_desc = $row['cat_desc'];
    }
}