<?php

class User {

    // Database connection and table name
    private $conn;
    private $table_name = "customers";

    // Propreties
    public $customer_id;
    public $name;
    public $email;
    public $password;
    public $contact;
    public $address;
    public $profile_image;
    public $ip_address;


    public function __construct($db)
    {
        $this->conn = $db;
    }

    function register() {

        $query = "INSERT INTO " . $this->table_name . " SET customer_name=:name, customer_email=:email, customer_pass=:pass, customer_contact=:contact, customer_address=:address, customer_image=:image, customer_ip=:ip";

        $stmt = $this->conn->prepare($query);

        // Sanitize posted values
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->password = htmlspecialchars(strip_tags($this->password));
        $this->contact = htmlspecialchars(strip_tags($this->contact));
        $this->address = htmlspecialchars(strip_tags($this->address));
        $this->profile_image = htmlspecialchars(strip_tags($this->profile_image));
        $this->ip_address = htmlspecialchars(strip_tags($this->ip_address));

        // Bind values
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":email", $this->email);
        //Hash the password
        $password_hash = password_hash($this->password, PASSWORD_BCRYPT);
        $stmt->bindParam(":pass", $password_hash);
        $stmt->bindParam(":contact", $this->contact);
        $stmt->bindParam(":address", $this->address);
        $stmt->bindParam(":image", $this->profile_image);
        $stmt->bindParam(":ip", $this->ip_address);

        // Execute query
        if($stmt->execute()){
            return true;
        }else {
            return false;
        }
    }


    function uploadPhoto() {
        $result_message = "";

        // now if the image is not empty
        if($this->profile_image) {
            $target_directory = "customer/customer_images/";
            $target_file = $target_directory . $this->profile_image;

            $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
            // error message
            $file_upload_error_message = "";

            // make sure that the file is a real image
            $check = getimagesize($_FILES['c_image']['tmp_name']);
            if($check!==false) {
                // submitted file is an imge
            }
            else {
                $file_upload_error_message.="<div>Submited file is not an image</div>";
            }

            // make sure certain file types are allowed
            $allowed_file_types = array("jpg", "jpeg", "png", "gif");
            if(!in_array($file_type, $allowed_file_types)){
                $file_upload_error_message.="<div>Only JPG, JPEG, PNG, GIF files are allowed</div>";
            }

            // make sure file does not exist
            if(file_exists($target_file)){
                $file_upload_error_message.="<div>Image already exists. Try change file name</div>";
            }

            // make sure the upload folder exists
            if(!is_dir($target_directory)){
                mkdir($target_directory,0777,true);
            }

            if(empty($file_upload_error_message)){
                // it means there are no errors, so try to upload
                if(move_uploaded_file($_FILES["c_image"]["tmp_name"],$target_file)){
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

    
}