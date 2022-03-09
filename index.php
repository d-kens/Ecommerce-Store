<?php

// Include databse and object file
include_once 'Config/Database.php';
include_once 'Objects/Slide.php';

// Intstatiate database and objects
$database = new Database();
$db = $database->getConnection();

$slide = new Slide($db);


?>








<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="styles/bootstrap-337.min.css">

        <!--Font awesome-->
        <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
        <!--Custom CSS file-->
        <link rel="stylesheet" href="styles/style.css">

        <title>Ecommerce Store</title>

    </head>
    <body>

        <div id="top"> <!--Top Begin-->
            <div class="container"><!--Container Begin-->

                <div class="col-md-6 offer"><!--col-md-6 offer begin -->

                    <a href="" class="btn btn-success btn-sm">Welcome</a>
                    <a href="checkout.php">4 Items in your Cart | Total Price: Ksh: 3000</a>

                </div><!--col-md-6 offer end-->

                <div class="col-md-6"><!--col-md-6 begin-->

                    <ul class="menu"><!--cmenu begin-->
                        <li>
                            <a href="customer_register.php">Register</a>
                        </li>
                        <li>
                            <a href="customer/my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Cart</a>
                        </li>
                        <li>
                            <a href="checkout.php">Login</a>
                        </li>
                    </ul><!--cmenu end-->

                </div><!--col-md-6 end-->

            </div><!--Container End-->
        </div><!--Top end-->

        <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default begin-->

            <div class="container"><!--Container begin-->

                <div class="navbar-header"><!--Navbar-header begin-->

                    <a href="index.php" class="navbar-brand home"><!--Navbar-brand home begin-->

                        <img src="images/ecom-store-logo.png" alt="Store-Logo" class="hidden-xs">
                        <img src="images/ecom-store-logo-mobile.png" alt="Store-Logo" class="visible-xs">

                    </a><!--Navbar-brand home ends-->
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle Navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button>

                </div><!--Nabar-header end-->

                <div class="navbar-collapse collapse" id="navigation"><!--navbar-collapse collapse begin-->

                    <div class="padding-nav"><!--padding-nav begin-->

                        <ul class="nav navbar-nav left"><!--nav navbar-nav left begin-->

                            <li class="active">
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="shop.php">Shop</a>
                            </li>
                            <li>
                                <a href="customer/my_account.php">My Account</a>
                            </li>
                            <li>
                                <a href="cart.php">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="contact.php">Contact Us</a>
                            </li>

                        </ul><!--nav navbar-nav left end-->

                    </div><!--padding-nav end-->

                    <a href="cart.php" class="btn navbar-btn btn-primary right"><!--btn navbar-btn btn-primary right begin-->

                        <i class="fa fa-shopping-cart"></i>
                        <span>4 items in your cart</span>

                    </a><!--btn navbar-btn btn-primary right end-->

                    <div class="navbar-collapse collapse right"><!--navbar-collapse collapse right begin-->

                        <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!--btn btn-primary navbar-btn begin-->

                            <span class="sr-only">Toggle Search</span>
                            <i class="fa fa-search"></i>

                        </button><!--btn btn-primary navbar-btn end-->

                    </div><!--navbar-collapse collapse right end-->

                    <div class="collapse clearfix" id="search"><!--collapse clearfix begin-->

                        <form action="result.php" method="get" class="navbar-form"><!--navbar-form begin-->

                            <div class="input-group"><!--input-group begin-->

                                <input type="text" class="form-control" name="user_querry" placeholder="search" required>

                                <span class="input-group-btn"><!--input-group-btn begin-->
                                    <button type="submit" name="search" value="search" class="btn btn-primary"><!--btn btn-primary begin-->

                                        <i class="fa fa-search"></i>

                                    </button><!--btn btn-primary end-->
                                </span><!--input-group-btn end-->

                            </div><!--input-group end-->

                        </form><!--navbar-form end-->

                    </div><!--collapse clearfix end-->

                </div><!--navbar-collapse collapse end-->

            </div><!--Container end-->

        </div><!-- navbar navbar-default end-->


        <div class="container" id="slider"><!--Cantainer start-->

            <div class="col-md-12"><!--col-md-12 start-->

                <div class="carousel slide" id="myCarousel" data-ride="carousel"><!--carousel slide start-->

                    <ol class="carousel-indicators"><!--carousel-indicators start-->

                        <?php
                            $stmt = $slide->read();
                            $i = 0;

                            foreach ($stmt as $row){
                                $actives = '';
                                if($i == 0){
                                    $actives = 'active';
                                }
                            
                        ?>
                                <li data-target="#myCarousel" data-slide-to="<?= $i; ?>" class="<?= $actives ?>"></li>
                            <?php $i++; } ?>
                        <!--<li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>-->

                    </ol><!--carousel-indicators end-->

                    <div class="carousel-inner"><!--carousel-inner start-->
                        <?php
                            $stmt = $slide->read();
                            $i = 0;

                            foreach ($stmt as $row){
                                $actives = '';
                                if($i == 0){
                                    $actives = 'active';
                                }
                            
                        ?>
                                <div class="item <?= $actives; ?>">
                                    <img src="admin_area/slides_images/<?= $row['slide_image']; ?>" alt="Slider Image 2" width="100%">
                                </div>
                            <?php $i++; } ?>

                        <!--<div class="item">
                            <img src="admin_area/slides_images/slide2.jpg" alt="Slider Image 2">
                        </div>

                        <div class="item">
                            <img src="admin_area/slides_images/slide3.jpg" alt="Slider Image 3">
                        </div>-->
                    </div><!--carousel-inner end-->

                    <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!--left carousel-control-inner start-->

                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>

                    </a><!--left carousel-control-inner end-->

                    <a href="#myCarousel" class="right carousel-control" data-slide="next"><!--right carousel-control-inner start-->

                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>

                    </a><!--right carousel-control-inner end-->


                </div><!--carousel slide end-->

            </div><!--col-md-12 end-->

        </div><!--Cantainer end-->


        <div id="advantages"><!--Advantages begin-->

            <div class="container"><!--contrainer begin-->


                <div class="same-height-row"><!--Same height row begin-->

                    <div class="col-sm-4"><!--col-sm-4 begin-->

                        <div class="box same-height"><!--box same-height-begin-->

                            <div class="icon"><!--icon begin-->

                                <i class="fa fa-heart"></i>

                            </div><!-- icon end-->
                            <h3>
                                <a href="">Best Offers</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                        </div><!--box ame-height end-->

                    </div><!--col-sm-4 end-->

                    <div class="col-sm-4"><!--col-sm-4 begin-->

                        <div class="box same-height"><!--box same-height-begin-->

                            <div class="icon"><!--icon begin-->

                                <i class="fa fa-tag"></i>

                            </div><!-- icon end-->
                            <h3>
                                <a href="">Best Prices</a>
                            </h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>

                        </div><!--box ame-height end-->

                    </div><!--col-sm-4 end-->

                    <div class="col-sm-4"><!--col-sm-4 begin-->

                        <div class="box same-height"><!--box same-height-begin-->

                            <div class="icon"><!--icon begin-->

                                <i class="fa fa-thumbs-up"></i>

                            </div><!-- icon end-->
                            <h3>
                                <a href="">100% original</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                        </div><!--box ame-height end-->

                    </div><!--col-sm-4 end-->

                </div><!--Same height row end-->


            </div><!--container end-->

        </div><!--Advantages end-->

        <div id="hot"><!--hot begin-->

            <div class="box"><!--box begin-->

                <div class="container"><!--container begin-->

                    <div class="col-md-12"><!--col-md-12 begin-->

                        <h2>
                            Our Latest Products
                        </h2>

                    </div><!--col-md-12 begin-->

                </div><!--container finish-->

            </div><!--box finish-->

        </div><!--hot finish-->

        <div class="container" id="content"><!--container begin-->

            <div class="row"><!--row begin-->

                <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->

                    <div class="product"><!--product begin-->

                        <a href="details.php">
                            <img class="img-responsive" src="admin_area/product_images/product-3.jpg" alt="Product 1">
                        </a>

                        <div class="text"><!--text begin-->

                            <h3>
                                <a href="details.php">Product 1.</a>
                            </h3>

                            <p class="price">Ksh: 3000</p>

                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Deatils</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart">
                                        Add To Cart
                                    </i>
                                </a>
                            </p>

                        </div><!--text end-->

                    </div><!--product end-->

                </div><!--col-sm-4 col-sm-6 single end -->
                <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->

                    <div class="product"><!--product begin-->

                        <a href="details.php">
                            <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">
                        </a>

                        <div class="text"><!--text begin-->

                            <h3>
                                <a href="details.php">Product 1.</a>
                            </h3>

                            <p class="price">Ksh: 3000</p>

                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Deatils</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart">
                                        Add To Cart
                                    </i>
                                </a>
                            </p>

                        </div><!--text end-->

                    </div><!--product end-->

                </div><!--col-sm-4 col-sm-6 single end -->
                <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->

                    <div class="product"><!--product begin-->

                        <a href="details.php">
                            <img class="img-responsive" src="admin_area/product_images/product-3.jpg" alt="Product 1">
                        </a>

                        <div class="text"><!--text begin-->

                            <h3>
                                <a href="details.php">Product 1.</a>
                            </h3>

                            <p class="price">Ksh: 3000</p>

                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Deatils</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart">
                                        Add To Cart
                                    </i>
                                </a>
                            </p>

                        </div><!--text end-->

                    </div><!--product end-->

                </div><!--col-sm-4 col-sm-6 single end -->
                <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->

                    <div class="product"><!--product begin-->

                        <a href="details.php">
                            <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">
                        </a>

                        <div class="text"><!--text begin-->

                            <h3>
                                <a href="details.php">Product 1.</a>
                            </h3>

                            <p class="price">Ksh: 3000</p>

                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Deatils</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart">
                                        Add To Cart
                                    </i>
                                </a>
                            </p>

                        </div><!--text end-->

                    </div><!--product end-->

                </div><!--col-sm-4 col-sm-6 single end -->
                <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->

                    <div class="product"><!--product begin-->

                        <a href="details.php">
                            <img class="img-responsive" src="admin_area/product_images/product-3.jpg" alt="Product 1">
                        </a>

                        <div class="text"><!--text begin-->

                            <h3>
                                <a href="details.php">Product 1.</a>
                            </h3>

                            <p class="price">Ksh: 3000</p>

                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Deatils</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart">
                                        Add To Cart
                                    </i>
                                </a>
                            </p>

                        </div><!--text end-->

                    </div><!--product end-->

                </div><!--col-sm-4 col-sm-6 single end -->
                <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->

                    <div class="product"><!--product begin-->

                        <a href="details.php">
                            <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">
                        </a>

                        <div class="text"><!--text begin-->

                            <h3>
                                <a href="details.php">Product 1.</a>
                            </h3>

                            <p class="price">Ksh: 3000</p>

                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Deatils</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart">
                                        Add To Cart
                                    </i>
                                </a>
                            </p>

                        </div><!--text end-->

                    </div><!--product end-->

                </div><!--col-sm-4 col-sm-6 single end -->
                <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->

                    <div class="product"><!--product begin-->

                        <a href="details.php">
                            <img class="img-responsive" src="admin_area/product_images/product-3.jpg" alt="Product 1">
                        </a>

                        <div class="text"><!--text begin-->

                            <h3>
                                <a href="details.php">Product 1.</a>
                            </h3>

                            <p class="price">Ksh: 3000</p>

                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Deatils</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart">
                                        Add To Cart
                                    </i>
                                </a>
                            </p>

                        </div><!--text end-->

                    </div><!--product end-->

                </div><!--col-sm-4 col-sm-6 single end -->
                <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->

                    <div class="product"><!--product begin-->

                        <a href="details.php">
                            <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">
                        </a>

                        <div class="text"><!--text begin-->

                            <h3>
                                <a href="details.php">Product 1.</a>
                            </h3>

                            <p class="price">Ksh: 3000</p>

                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Deatils</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart">
                                        Add To Cart
                                    </i>
                                </a>
                            </p>

                        </div><!--text end-->

                    </div><!--product end-->

                </div><!--col-sm-4 col-sm-6 single end -->

            </div><!--row end-->

        </div><!--container end-->

        <!--Footer-->
        <?php

            include("includes/footer.php");

        ?>

        <script src="js/jquery-331.min.js"></script>
        <script src="js/bootstrap-337.min.js"></script>
    </body>
</html>