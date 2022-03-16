<?php

class ProductCategory{
    // Databse connection and table name
    private $conn;
    private $table_name = "product_categories";

    // Object properties
    public $p_cat_id;
    public $p_cat_title;
    public $p_cat_desc;

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
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY p_cat_title";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    function readById(){
        // select query
        $query = "SELECT * FROM ". $this->table_name ." WHERE p_cat_id = ?";

        // prepare statemt
        $stmt = $this->conn->prepare($query);

        // sanitize values
        $this->p_cat_id = htmlspecialchars(strip_tags($this->p_cat_id));

        // bind parameters
        $stmt->bindParam(1, $this->p_cat_id);

        // execute query
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->p_cat_title = $row['p_cat_title'];
        $this->p_cat_desc = $row['p_cat_desc'];
    }
}