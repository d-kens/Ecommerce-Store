<?php

class Slide {
    // Database connection and table name
    private $conn;
    private $table_name = "slider";

    // object properties
    public $slide_id;
    public $slide_name;
    public $slide_image;


    public function __construct($db)
    {
        $this->conn = $db;
    }

    // read slide images
    function read() {
        // write query
        $query = "SELECT * FROM " . $this->table_name. " LIMIT 0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }


}