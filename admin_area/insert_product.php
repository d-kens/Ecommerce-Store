<?php

include '../Config/Database.php';
include '../Objects/ProductCategory.php';
include '../Objects/Category.php';

// get databse connection
$database = new Database();
$db = $database->getConnection();

// pass connection to objects
$productCategory = new ProductCategory($db);
$category = new Category($db);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Insert Product</title>

    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <!--Font awesome-->
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">



</head>
<body>
    
    <div class="row"><!--row begin-->

        <div class="col-lg-12"><!--col-lg-12 begin-->

            <ol class="breadcrumb"><!--breadcrumb begin-->

                <li class="active"><!--active begin-->

                    <i class="fa fa-dashboard"></i> Dashboard / Insert Product

                </li><!--active end-->

            </ol><!--breadcrumb end-->

        </div><!--col-lg-12 end-->

    </div><!--row end-->

    <div class="row"><!--row begin-->

        <div class="col-lg-12"><!--col-lg-12 begin-->

            <div class="panel panel-default"><!--panel panel-default begin-->

                <div class="panel-heading"><!--panel-heading begin-->

                    <h3 class="panel-title"><!--panel-title begin-->

                        <i class="fa fa-money fa-fw"></i> Insert Product

                    </h3><!--panel-title end-->

                </div><!--panel-heading end-->

                <div class="panel-body"><!--panel-body begin-->

                    <form method="post" class="form-horizontal" enctype="multipart/form-data"><!--form-horizontal begin-->

                        <div class="form-group"><!--form-group begin-->

                            <label class="col-md-3 control-label"> Product Title </label>

                            <div class="col-md-6"><!--col-md-6 begin-->

                                <input type="text" name="product_title" class="form-control" required>

                            </div><!--col-md-6 end-->

                        </div><!--form-group end-->

                        <div class="form-group"><!--form-group begin-->

                            <label class="col-md-3 control-label"> Product Category</label>


                            <div class="col-md-6"><!--col-md-6 begin-->

                                <select name="product_cat" class="form-control">
                                    <option> Select a Category Product </option>
                                    <?php
                                        // Read product categories from the database
                                        $stmt = $productCategory->read();
                                        while($row_p_cats = $stmt->fetch(PDO::FETCH_ASSOC)){
                                            extract($row_p_cats);
                                            ?>
                                                <option value="<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></option>
                                            <?php
                                        }
                                    ?>
                                </select>

                            </div><!--col-md-6 end-->

                        </div><!--form-group end-->

                        <div class="form-group"><!--form-group begin-->

                            <label class="col-md-3 control-label"> Category</label>


                            <div class="col-md-6"><!--col-md-6 begin-->

                                <select name="product_cat" class="form-control">
                                    <option> Select a Category </option>
                                    <?php
                                        // Read product categories from the database
                                        $stmt = $category->read();
                                        while($cats = $stmt->fetch(PDO::FETCH_ASSOC)){
                                            extract($cats);
                                            ?>
                                                <option value="<?php echo $cat_id; ?>"><?php echo $cat_title; ?></option>
                                            <?php
                                        }
                                    ?>
                                </select>

                            </div><!--col-md-6 end-->

                        </div><!--form-group end-->

                        <div class="form-group"><!--form-group begin-->

                            <label class="col-md-3 control-label"> Product Image 1 </label>

                            <div class="col-md-6"><!--col-md-6 begin-->

                                <input type="file" name="product_img1" class="form-control" required>

                            </div><!--col-md-6 end-->

                        </div><!--form-group end-->

                        <div class="form-group"><!--form-group begin-->

                            <label class="col-md-3 control-label"> Product Image 2 </label>

                            <div class="col-md-6"><!--col-md-6 begin-->

                                <input type="file" name="product_img2" class="form-control" required>

                            </div><!--col-md-6 end-->

                        </div><!--form-group end-->

                        <div class="form-group"><!--form-group begin-->

                            <label class="col-md-3 control-label"> Product Image 3 </label>

                            <div class="col-md-6"><!--col-md-6 begin-->

                                <input type="file" name="product_img3" class="form-control" required>

                            </div><!--col-md-6 end-->

                        </div><!--form-group end-->

                        <div class="form-group"><!--form-group begin-->

                            <label class="col-md-3 control-label"> Product Price </label>

                            <div class="col-md-6"><!--col-md-6 begin-->

                                <input type="text" name="product_price" class="form-control" required>

                            </div><!--col-md-6 end-->

                        </div><!--form-group end-->

                        <div class="form-group"><!--form-group begin-->

                            <label class="col-md-3 control-label"> Product Keywords </label>

                            <div class="col-md-6"><!--col-md-6 begin-->

                                <input type="text" name="product_keywords" class="form-control" required>

                            </div><!--col-md-6 end-->

                        </div><!--form-group end-->

                        <div class="form-group"><!--form-group begin-->

                            <label class="col-md-3 control-label"> Product Description </label>

                            <div class="col-md-6"><!--col-md-6 begin-->

                                <textarea name="product_desc" cols="19" rows="6" class="form-control"></textarea>

                            </div><!--col-md-6 end-->

                        </div><!--form-group end-->

                        <div class="form-group"><!--form-group begin-->

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6"><!--col-md-6 begin-->

                                <input name="submit" value="Insert Product" type="submit" class="btn btn-primary form-control">

                            </div><!--col-md-6 end-->

                        </div><!--form-group end-->

                    </form><!--form-horizontal end-->

                </div><!--panel-body end-->

            </div><!--panel panel-default end-->

        </div><!--col-lg-12 end-->

    </div><!--row end-->
    

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>

    <script src="js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({selector:'textarea'});
    </script>
</body>
</html>