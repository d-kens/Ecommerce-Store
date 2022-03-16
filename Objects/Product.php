<?php

class Product {
    // Database and table name
    private $conn;
    private $table_name = "products";

    // object properties
    public $product_id;
    public $p_cat_id;
    public $cat_id;
    public $date;
    public $product_title;
    public $product_img1;
    public $product_img2;
    public $product_img3;
    public $product_price;
    public $product_desc;
    public $product_keywords;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function __destruct()
    {
        $this->conn = null;
    }


    function insert() {
        $query = "INSERT INTO " . $this->table_name . " SET p_cat_id=:p_cat_id, cat_id=:cat_id, created=:created, product_title=:product_title, product_img1=:product_img1, 
        product_img2=:product_img2, product_img3=:product_img3, product_price=:product_price, product_keywords=:product_keywords, product_desc=:product_desc";

        $stmt = $this->conn->prepare($query);

        // Sanitize posted values
        $this->p_cat_id = htmlspecialchars(strip_tags($this->p_cat_id));
        $this->cat_id = htmlspecialchars(strip_tags($this->cat_id));
        $this->product_title = htmlspecialchars(strip_tags($this->product_title));
        $this->product_img1 = htmlspecialchars(strip_tags($this->product_img1));
        $this->product_img2 = htmlspecialchars(strip_tags($this->product_img2));
        $this->product_img3 = htmlspecialchars(strip_tags($this->product_img3));
        $this->product_price = htmlspecialchars(strip_tags($this->product_price));
        $this->product_keywords = htmlspecialchars(strip_tags($this->product_keywords));
        $this->product_desc = htmlspecialchars(strip_tags($this->product_desc));

        // to get timestamp
        $this->date = date('Y-m-d H:i:s');

        //bind values
        $stmt->bindParam(":p_cat_id",$this->p_cat_id);
        $stmt->bindParam(":cat_id",$this->cat_id);
        $stmt->bindParam(":created",$this->date);
        $stmt->bindParam(":product_title",$this->product_title);
        $stmt->bindParam(":product_img1",$this->product_img1);
        $stmt->bindParam(":product_img2",$this->product_img2);
        $stmt->bindParam(":product_img3",$this->product_img3);
        $stmt->bindParam(":product_price",$this->product_price);
        $stmt->bindParam(":product_keywords",$this->product_keywords);
        $stmt->bindParam(":product_desc",$this->product_desc);


        if($stmt->execute()){
            return true;
        }
        else{
            return false;
        }
        
    }

    // will upload image file to the server
    function uploadPhoto() {
        $result_message = "";

        // now if the image is not empty
        if($this->product_img1 && $this->product_img2 && $this->product_img3) {
            $target_directory = "product_images/";
            $target_file1 = $target_directory . $this->product_img1;
            $target_file2 = $target_directory . $this->product_img2;
            $target_file3 = $target_directory . $this->product_img3;
            $file_type1 = pathinfo($target_file1, PATHINFO_EXTENSION);
            $file_type2 = pathinfo($target_file2, PATHINFO_EXTENSION);
            $file_type3 = pathinfo($target_file3, PATHINFO_EXTENSION);

            // error message
            $file_upload_error_message = "";

            // make sure that the file is a real image
            $check1 = getimagesize($_FILES['product_img1']['tmp_name']);
            $check2 = getimagesize($_FILES['product_img2']['tmp_name']);
            $check3 = getimagesize($_FILES['product_img3']['tmp_name']);
            if($check1!==false && $check2!==false && $check3!==false) {
                // submitted file is an imge
            }
            else {
                $file_upload_error_message.="<div>Submited file is not an image</div>";
            }

            // make sure certain file types are allowed
            $allowed_file_types = array("jpg", "jpeg", "png", "gif");
            if(!in_array($file_type1, $allowed_file_types) && !in_array($file_type2, $allowed_file_types) && !in_array($file_type3, $allowed_file_types)){
                $file_upload_error_message.="<div>Only JPG, JPEG, PNG, GIF files are allowed</div>";
            }

            // make sure file does not exist
            if(file_exists($target_file1) && file_exists($target_file2) && file_exists($target_file3)){
                $file_upload_error_message.="<div>Image already exists. Try change file name</div>";
            }

            // make sure the upload folder exists
            if(!is_dir($target_directory)){
                mkdir($target_directory,0777,true);
            }

            if(empty($file_upload_error_message)){
                // it means there are no errors, so try to upload
                if(move_uploaded_file($_FILES["product_img1"]["tmp_name"],$target_file1) && move_uploaded_file($_FILES["product_img2"]["tmp_name"],$target_file2) && move_uploaded_file($_FILES["product_img3"]["tmp_name"],$target_file3)){
                    // it means photo was uploaded
                }else{
                    $result_message.="<div class='alert alert-danger'>";
                        $result_message.="<div>Unable to upload photo.</div>";
                        $result_message.="<div>Update the record to upload photo.</div>";
                    $result_message.="</div>";
                }
            }
            // if $file_upload_error_message is NOT empty
            else{
                // it means there are some errors, so show them to user
                $result_message.="<div class='alert alert-danger'>";
                    $result_message.="{$file_upload_error_message}";
                    $result_message.="<div>Update the record to upload photo.</div>";
                $result_message.="</div>";
            }

            


        }


        return $result_message;
    }

    // Retrieve all product record
    function readAll() {
        $query = "SELECT product_id, product_title, product_img1, product_price FROM " . $this->table_name . " limit 0,8";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;

    }

    // Retrieve by ID
    function readById() {
        $query = "SELECT * FROM ". $this->table_name ." WHERE p_cat_id = ?";
        $stmt = $this->conn->prepare($query);
        // sanitize values
        $this->p_cat_id = htmlspecialchars(strip_tags($this->p_cat_id));

        // bind parameters
        $stmt->bindParam(1, $this->p_cat_id);




        $stmt->execute();

        return $stmt;
    }

    // used for paging products
    function pageProducts($from_record_num, $records_per_page){
        $query = "SELECT product_id, product_title, product_img1, product_price FROM " . $this->table_name . " ORDER BY rand() limit {$from_record_num},{$records_per_page}";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    //used for paging products
    public function countAll() {

        $query = "SELECT product_id FROM ". $this->table_name."";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $num = $stmt->rowCount();

        return $num;
        
    }
    

    
}