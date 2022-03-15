<?php

$active = 'Shop';
include_once 'includes/header.php';

// configure pagination variables
// page give in url parameter; Default page is one
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// set the number of records per page
$records_per_page = 3;

// calculate the query limit clause
$from_record_num = ($records_per_page * $page) - $records_per_page;






?>

        <div id="content"><!--content begin-->
            <div class="container"><!--container begin-->
                <div class="col-md-12"><!--col-md-12 begin-->

                    <ul class="breadcrumb"><!--breadcrumb begin-->
                        <li><a href="index.php">Home</a></li>
                        <li>Shop</li>
                    </ul><!--breadcrumb end-->

                </div><!--col-md-12 end-->
                <div class="col-md-3"><!--col-md-3 begin-->

                    <!--side bar-->
                    <?php

                    include("includes/sidebar.php");

                    ?>

                </div><!--col-md-3 end-->

                <div class="col-md-9"><!--col-md-9 begin-->
                    <?php
                        if(!isset($_GET['p_cat'])){
                            if(!isset($_GET['cat'])){
                                ?>
                                <div class="box-shop"><!--box begin-->
                                    <h1>Shop</h1>
                                </div><!--box end-->
                                <?php
                            }
                        }
                    ?>
                    
                    
                    <div class="row"><!--row begin-->
                        <?php
                            if(!isset($_GET['p_cat'])){
                                if(!isset($_GET['cat'])){
                                    // query products
                                    $stmt = $product->pageProducts($from_record_num,$records_per_page);
                                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                            extract($row);
                                            ?>
                                                <div class="col-md-4 col-sm-6 center-responsive"><!--col-md-4 col-md-6 center-responsive begin-->

                                                    <div class="product"><!--product begin-->
                                                        <a href="details.php?pro_id=<?php echo $product_id ?>">
                                                            <img class="img-responsive" src="admin_area/product_images/<?php echo $product_img1; ?>" alt="<?php echo $product_title; ?>">
                                                        </a>

                                                        <div class="text"><!--text begin-->

                                                            <h3>
                                                                <a href="details.php?pro_id=<?php echo $product_id ?>"><?php echo $product_title; ?></a>
                                                            </h3>

                                                            <p class="price"><?php echo $product_price; ?></p>

                                                            <p class="button">
                                                                <a href="details.php?pro_id=<?php echo $product_id ?>" class="btn btn-default">View Deatils</a>
                                                                <a href="details.php?pro_id=<?php echo $product_id ?>" class="btn btn-primary">
                                                                    <i class="fa fa-shopping-cart">
                                                                        Add To Cart
                                                                    </i>
                                                                </a>
                                                            </p>

                                                        </div><!--text end-->
                                                    </div><!--product end-->

                                                </div><!--col-md-4 col-md-6 center-responsive end-->
                                            <?php
                                    }
                                
                        ?>
                    </div><!--row end-->
                    <center>
                        <ul class="pagination">
                            <?php
                                // the page where this paging is used
                                $page_url = "shop.php?";

                                // count all products in the database to calculate total pages
                                $total_rows = $product->countAll();

                                // paging buttons here
                                include_once 'paging.php';
                                }
                            }
                            ?>
                        </ul>
                    </center>

                </div><!--col-md-9 end-->

            </div><!--container end-->
        </div><!--content end-->



        <!--Footer-->
        <?php

        include("includes/footer.php");

        ?>

        <script src="js/jquery-331.min.js"></script>
        <script src="js/bootstrap-337.min.js"></script>
    </body>
</html>