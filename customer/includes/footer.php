<?php

include_once '../Config/Database.php';
include_once '../Objects/Category.php';
include_once '../Objects/Product.php';
include_once '../Objects/ProductCategory.php';

$database = new Database();
$db = $database->getConnection();


$productCategory = new ProductCategory($db);


?>
<div id="footer"><!--#footer begin-->
    <div class="container"><!--container begin-->
        <div class="row">
                <div class="col-sm-6 col-md-3"><!--col-sm-6 col-md-3 begin-->

                    <h4>Pages</h4>
                    <ul><!--ul Begin-->
                        <li><a href="../cart.php">Shopping Cart</a></li>
                        <li><a href="../shop.php">Shop</a></li>
                        <li><a href="../contact.php">Contact</a></li>
                        <li><a href="my_account.php">My Account</a></li>
                    </ul><!--ul end-->
                    <br>

                    <h4>User Section</h4>
                    <ul><!--ul Begin-->
                        <li><a href="../checkout.php">Login</a></li>
                        <li><a href="../customer_register.php">Register</a></li>
                    </ul><!--ul end-->

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div><!--col-sm-6 col-md-3 end-->

                <div class="col-sm-6 col-md-3"><!--col-sm-6 col-md-3 begin-->
                    <h4>Top Products Categories</h4>
                    <ul><!--ul begin-->
                             <?php
                                $stmt = $productCategory->read();

                                while($p_cats = $stmt->fetch(PDO::FETCH_ASSOC)){
                                    extract($p_cats);
                                    ?>
                                        <li>
                                            <a href="shop.php?<?php echo $p_cat_id ?>"> <?php echo $p_cat_title ?> </a>
                                        </li>
                                    <?php
                                }
                            ?>
                            <!--Static Product Categories-->
                            <!--<li><a href="">Jackets</a></li>
                            <li><a href="">Accessories</a></li>
                            <li><a href="">Coats</a></li>
                            <li><a href="">Shoes</a></li>
                            <li><a href="">T-Shirts</a></li>-->
                    </ul><!--ul end-->

                    <hr class="hidden-md hidden-lg">

                </div><!--col-sm-6 col-md-3 end-->

                <div class="col-sm-6 col-md-3"><!--col-sm-6 col-md-3 begin-->
                    <h4>Find Us:</h4>

                    <p><!--P Start-->

                        <strong>Omondi Store</strong>
                        <br/>Nairobi
                        <br/>Kenya
                        <br/>00000-0500-3157
                        <br/>dickens.onyango@strathmore.edu
                        <br/><strong>Onyango Dickens</strong>

                    </p><!--p end-->

                    <a href="contact.php">Checkout Our Contact Page</a>

                    <hr class="hidden-md hidden-lg">


                </div><!--col-sm-6 col-md-3 end-->

                <div class="col-sm-6 col-md-3">
                    <h4>Get The News</h4>
                    <p class="text-muted">
                        Dont miss our latest updated products
                    </p>

                    <form action="" method="post"><!--form begin-->
                        <div class="input-group"><!--input-group begin-->
                            <input type="text" class="form-control" name="email">

                            <span class="input-group-btn"><!--input-group-btn begin-->

                                <input type="submit" value="subscribe" class="btn btn-default">

                            </span><!--input-group-btn end-->
                        </div><!--input group end-->
                    </form><!--form end-->

                    <hr>

                    <h4>Keep In Touch</h4>
                    <p class="social">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-google-plus"></a>
                        <a href="#" class="fa fa-envelope"></a>
                    </p>
                </div>

        </div>
    </div><!--container end-->
</div><!--#footer end-->

<div id="copyright">
    <div class="container">
        <div class="col-md-6">
            <p class="pull-left">&copy; 2022 Omondi Store All Rights Reserved</p>
        </div>
        <div class="col-md-6">
            <p class="pull-right">Theme by: <a href="#">Onyango Dickens</a></p>
        </div>
    </div>
</div>