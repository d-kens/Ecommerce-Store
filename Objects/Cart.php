<?php

class Cart {
    // Databse connection and table name
    private $conn;
    private $table_name = "cart";

    // object properties
    public $p_id;
    public $ip_address;
    public $quantity;
    public $size;

    // constructor
    public function __construct($db) {
        $this->conn = $db;
    }

    //Check if a cart item exist
    public function exists() {
        $query = "SELECT * FROM ". $this->table_name . " WHERE ip_address = ? AND p_id = ?";

        $stmt = $this->conn->prepare($query);

        //sanitize 
        $this->p_id = htmlspecialchars(strip_tags($this->p_id));
        $this->ip_address = htmlspecialchars(strip_tags($this->ip_address));

        // Bind values
        $stmt->bindParam(1, $this->ip_address);
        $stmt->bindParam(2, $this->p_id);

        $stmt->execute();

        // get row value
        $rows = $stmt->fetch(PDO::FETCH_NUM);

        if($rows > 0){
            return true;
        }
        
        return false;
    }

    function create() {
        $query = "INSERT INTO ".$this->table_name. " SET p_id = :p_id, ip_address = :ip_address, quantity = :quantity, size = :size";

        $stmt = $this->conn->prepare($query);

        $this->p_id = htmlspecialchars(strip_tags($this->p_id));
        $this->ip_address = htmlspecialchars(strip_tags($this->ip_address));
        $this->quantity = htmlspecialchars(strip_tags($this->quantity));
        $this->size = htmlspecialchars(strip_tags($this->size));

        $stmt->bindParam(":p_id", $this->p_id);
        $stmt->bindParam(":ip_address", $this->ip_address);
        $stmt->bindParam(":quantity", $this->quantity);
        $stmt->bindParam(":size", $this->size);

        if($stmt->execute()){
            return true;
        }

        return false;
    }

    // count items in cart
    public function count()
    {
    
        // query to count existing cart item
        $query = "SELECT count(*) FROM " . $this->table_name . " WHERE ip_address=:ip_address";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->ip_address = htmlspecialchars(strip_tags($this->ip_address));
    
        // bind category id variable
        $stmt->bindParam(":ip_address", $this->ip_address);
    
        // execute query
        $stmt->execute();
    
        // get row value
        $rows = $stmt->fetch(PDO::FETCH_NUM);
    
        // return
        return $rows[0];
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE ip_address=:ip_address";

        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->ip_address = htmlspecialchars(strip_tags($this->ip_address));
    
        // bind category id variable
        $stmt->bindParam(":ip_address", $this->ip_address);
    
        // execute query
        $stmt->execute();

        return $stmt;
    }

    
}