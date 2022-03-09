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

    function read() {
        // select all data
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY p_cat_title";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}