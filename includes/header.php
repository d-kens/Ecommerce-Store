<?php

// Include databse and object file
include_once 'Config/Database.php';
include_once 'Objects/Slide.php';
include_once 'Objects/Product.php';
include_once 'Objects/Category.php';
include_once 'Objects/ProductCategory.php';

// Intstatiate database and objects
$database = new Database();
$db = $database->getConnection();

$slide = new Slide($db);
$product = new Product($db);
$category = new Category($db);
$productCategory = new ProductCategory($db);










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

                            <li class="<?php if($active == 'Home') echo "active"; ?>">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="<?php if($active == 'Shop') echo "active"; ?>">
                                <a href="shop.php">Shop</a>
                            </li>
                            <li class="<?php if($active == 'Account') echo "active"; ?>">
                                <a href="customer/my_account.php">My Account</a>
                            </li>
                            <li class="<?php if($active == 'Cart') echo "active"; ?>">
                                <a href="cart.php">Shopping Cart</a>
                            </li>
                            <li class="<?php if($active == 'Contact') echo "active"; ?>">
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