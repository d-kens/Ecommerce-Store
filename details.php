<?php


include_once 'includes/header.php';



if(isset($_GET['pro_id'])){
    // Get details of a single product
    $product->product_id = $_GET['pro_id'];
    $product->readOne();

    // Select product categories
    $productCategory->p_cat_id = $product->p_cat_id;
    $productCategory->readById();

}
function getRealIpUser(){
    switch(true){
        case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
        case(!empty($_SERVER['HTTP_X_CLIENT_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
        case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];

        default : return $_SERVER['REMOTE_ADDR'];
    }
}
if(isset($_GET['add_cart'])){
    $cart->ip_address = getRealIpUser();
    $cart->p_id = $_GET['add_cart'];
    $cart->quantity = $_POST['product_qty'];
    $cart->size = $_POST['product_size'];

    // Check if product exists in the cart
    if($cart->exists()) {
        ?>
            <script>
                alert('This product already added in cart');
            </script>
            <script>
                window.open('details.php?pro_id=<?php echo $cart->p_id ?>', '_self');
            </script>
        <?php
    }
    else {
        if($cart->create()) {
            ?>
                <script>
                    window.open('details.php?pro_id=<?php echo $cart->p_id ?>', '_self');
                </script>
            <?php
        }

    }

}

?>

        <div id="content"><!--content begin-->
            <div class="container"><!--container begin-->
                <div class="col-md-12"><!--col-md-12 begin-->

                    <ul class="breadcrumb"><!--breadcrumb begin-->
                        <li><a href="index.php">Home</a></li>
                        <li>Shop</li>
                        <li>
                            <a href="shop.php?p_cat=<?php echo $productCategory->p_cat_id; ?>"> <?php echo $productCategory->p_cat_title; ?> </a>
                        </li>
                        <li>
                            <?php echo $product->product_title; ?>
                        </li>
                    </ul><!--breadcrumb end-->

                </div><!--col-md-12 end-->
                <div class="col-md-3"><!--col-md-3 begin-->

                    <!--side bar-->
                    <?php

                    include("includes/sidebar.php");

                    ?>

                </div><!--col-md-3 end-->

                <div class="col-md-9"><!--col-md-9 begin-->
                    <div id="productMain" class="row"><!--row begin-->
                        <div class="col-sm-6"><!--col-sm-6 begin-->
                            <div id="mainImage"><!--mainImage begin-->
                                <div id="myCarousel" class="carousel slide"><!--carousel slide begin-->
                                    <ol class="carousel-indicators"><!--carousel-indicators begin-->
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol><!--carousel-indicators end-->

                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <center><img class="img-responsive" src="admin_area/product_images/<?php echo $product->product_img1; ?>" alt="Product 3"></center>
                                        </div>
                                        <div class="item">
                                            <center><img class="img-responsive" src="admin_area/product_images/<?php echo $product->product_img2; ?>" alt="Product 4"></center>
                                        </div>
                                        <div class="item">
                                            <center><img class="img-responsive" src="admin_area/product_images/<?php echo $product->product_img3; ?>" alt="Product 5"></center>
                                        </div>
                                    </div>

                                    <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!--left carousel-control begin-->
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        <span class="sr-only">Previuous</span><!--left carousel-control end-->
                                    </a>
                                    <a href="#myCarousel" class="right carousel-control" data-slide="next"><!--right carousel-control begin-->
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                        <span class="sr-only">Next</span>
                                    </a><!--right carousel-control end-->

                                </div><!--carousel slide end-->
                            </div><!--mainImage end-->
                        </div><!--col-sm-6 end-->

                        <div class="col-sm-6"><!--col-sm-6 begin-->
                            <div class="box"><!--box begin-->
                                <h1 class="text-center"><?php echo $product->product_title; ?></h1>

                                <form action="details.php?add_cart=<?php echo $product->product_id; ?>" class="form-horizontal" method="post"><!--form-horizontal begin-->
                                    <div class="form-group"><!--form-group begin-->
                                        <label for="" class="col-md-5 control-label">Product Quantity</label>

                                        <div class="col-md-7"><!--col-md-7 begin-->
                                            <select name="product_qty" id="" class="form-control"><!--select begin-->
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                                <option>15</option>
                                            </select><!--select end-->
                                        </div><!--col-md-7 end-->

                                    </div><!--form-group end-->

                                    <div class="form-group"><!--form-group begin-->
                                        <label class="col-md-5 control-label">Product Size</label>

                                        <div class="col-md-7"><!--col-md-7 begin-->

                                            <select name="product_size" class="form-control" required><!--select begin-->
                                                <option disabled selected>Select a size</option>
                                                <option>Small</option>
                                                <option>Medium</option>
                                                <option>Large</option>
                                            </select><!--select end-->

                                        </div><!--col-md-7 end-->

                                    </div><!--form-group end-->

                                    <p class="price text-center">Ksh: <?php echo $product->product_price; ?></p>

                                    <p class="text-center buttons">
                                        <button class="btn btn-primary i fa fa-shopping-cart"> Add to Cart</button>
                                    </p>

                                </form><!--form-horizontal end-->


                            </div><!--box end-->

                            <div class="row" id="thumbs"><!--row begin-->

                                <div class="col-xs-4"><!--col-xs-4 begin-->
                                    <a data-target="#myCarousel" data-slide-to="0" href="" class="thumb"><!--thumb begin-->
                                        <img src="admin_area/product_images/<?php echo $product->product_img1; ?>" alt="Product 3" class="img-responsive">
                                    </a><!--thumb end-->
                                </div><!--col-xs-4 end-->

                                <div class="col-xs-4"><!--col-xs-4 begin-->
                                    <a data-target="#myCarousel" data-slide-to="1" href="" class="thumb"><!--thumb begin-->
                                        <img src="admin_area/product_images/<?php echo $product->product_img2; ?>" alt="Product 3" class="img-responsive">
                                    </a><!--thumb end-->
                                </div><!--col-xs-4 end-->

                                <div class="col-xs-4"><!--col-xs-4 begin-->
                                    <a data-target="#myCarousel" data-slide-to="2" href="" class="thumb"><!--thumb begin-->
                                        <img src="admin_area/product_images/<?php echo $product->product_img3; ?>" alt="Product 4" class="img-responsive">
                                    </a><!--thumb end-->
                                </div><!--col-xs-4 end-->

                            </div><!--row finish-->


                        </div><!--col-sm-6 end-->

                    </div><!--row end-->

                    <div class="box" id="details"><!--box begin-->

                       <h4>Product Details</h4>

                       <p>
                           <?php echo $product->product_desc; ?>
                       </p>

                       <h4>Size</h4>

                       <ul>
                           <li>Small</li>
                           <li>Medium</li>
                           <li>Large</li>
                       </ul>

                       <hr>

                    </div><!--box end-->

                    <div id="row same-height-row"><!--row same-height-row begin-->
                        <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 begin-->
                            <div class="box same-height headline"><!--box same-height headline begin-->
                                <h3 class="text-center">Products You May Like</h3>
                            </div><!--box same-height headline end-->
                        </div><!--col-md-3 col-sm-6 end-->

                        <?php
                            $stmt = $product->read3();
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                extract($row);
                                ?>
                                <div class="col-md-3 col-sm-6 center-responsive"><!--col-md-3 col-sm-6 center-responsive begin-->
                                    <div class="product same-height"><!--product same-height begin-->
                                        <a href="details.php?pro_id=<?php echo $product_id; ?>">
                                            <img class="img-responsive" src="admin_area/product_images/<?php echo $product_img1; ?>" alt="product 6">
                                        </a>

                                        <div class="text"><!--text begin-->
                                            <h3><a href="details.php?pro_id=<?php echo $product_id; ?>"><?php echo $product_title; ?></a></h3>

                                            <p class="price">Ksh: <?php echo $product_price; ?></p>
                                        </div><!--text end-->

                                    </div><!--product same-height end-->
                                </div><!--col-md-3 col-sm-6 center-responsive end-->
                                <?php
                            }


                        ?>


                    </div><!--row same-height-row end-->

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