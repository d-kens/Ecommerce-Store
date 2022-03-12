<?php


include_once 'includes/header.php';

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
                                            <center><img class="img-responsive" src="admin_area/product_images/product-3.jpg" alt="Product 3"></center>
                                        </div>
                                        <div class="item">
                                            <center><img class="img-responsive" src="admin_area/product_images/product-4.jpg" alt="Product 4"></center>
                                        </div>
                                        <div class="item">
                                            <center><img class="img-responsive" src="admin_area/product_images/product-5.jpg" alt="Product 5"></center>
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
                                <h1 class="text-center">Jumper Jumper</h1>

                                <form action="details.php" class="form-horizontal" method="post"><!--form-horizontal begin-->
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

                                            <select name="product_size" class="form-control"><!--select begin-->
                                                <option>Select a size</option>
                                                <option>Small</option>
                                                <option>Medium</option>
                                                <option>Large</option>
                                            </select><!--select end-->

                                        </div><!--col-md-7 end-->

                                    </div><!--form-group end-->

                                    <p class="price text-center">Ksh: 3000</p>

                                    <p class="text-center buttons">
                                        <button class="btn btn-primary i fa fa-shopping-cart"> Add to Cart</button>
                                    </p>

                                </form><!--form-horizontal end-->


                            </div><!--box end-->

                            <div class="row" id="thumbs"><!--row begin-->

                                <div class="col-xs-4"><!--col-xs-4 begin-->
                                    <a data-target="#myCarousel" data-slide-to="0" href="" class="thumb"><!--thumb begin-->
                                        <img src="admin_area/product_images/product-3.jpg" alt="Product 3" class="img-responsive">
                                    </a><!--thumb end-->
                                </div><!--col-xs-4 end-->

                                <div class="col-xs-4"><!--col-xs-4 begin-->
                                    <a data-target="#myCarousel" data-slide-to="1" href="" class="thumb"><!--thumb begin-->
                                        <img src="admin_area/product_images/product-4.jpg" alt="Product 3" class="img-responsive">
                                    </a><!--thumb end-->
                                </div><!--col-xs-4 end-->

                                <div class="col-xs-4"><!--col-xs-4 begin-->
                                    <a data-target="#myCarousel" data-slide-to="2" href="" class="thumb"><!--thumb begin-->
                                        <img src="admin_area/product_images/product-5.jpg" alt="Product 4" class="img-responsive">
                                    </a><!--thumb end-->
                                </div><!--col-xs-4 end-->

                            </div><!--row finish-->


                        </div><!--col-sm-6 end-->

                    </div><!--row end-->

                    <div class="box" id="details"><!--box begin-->

                       <h4>Product Details</h4>

                       <p>
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium distinctio, vel laborum cum maxime quas ipsum.
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

                        <div class="col-md-3 col-sm-6 center-responsive"><!--col-md-3 col-sm-6 center-responsive begin-->
                            <div class="product same-height"><!--product same-height begin-->
                                <a href="">
                                    <img class="img-responsive" src="admin_area/product_images/product-6.jpg" alt="product 6">
                                </a>

                                <div class="text"><!--text begin-->
                                    <h3><a href="details.php">Product 6</a></h3>

                                    <p class="price">Ksh: 3000</p>
                                </div><!--text end-->

                            </div><!--product same-height end-->
                        </div><!--col-md-3 col-sm-6 center-responsive end-->

                        <div class="col-md-3 col-sm-6 center-responsive"><!--col-md-3 col-sm-6 center-responsive begin-->
                            <div class="product same-height"><!--product same-height begin-->
                                <a href="">
                                    <img class="img-responsive" src="admin_area/product_images/product-7.jpg" alt="product 7">
                                </a>

                                <div class="text"><!--text begin-->
                                    <h3><a href="details.php">Product 6</a></h3>

                                    <p class="price">Ksh: 3000</p>
                                </div><!--text end-->

                            </div><!--product same-height end-->
                        </div><!--col-md-3 col-sm-6 center-responsive end-->

                        <div class="col-md-3 col-sm-6 center-responsive"><!--col-md-3 col-sm-6 center-responsive begin-->
                            <div class="product same-height"><!--product same-height begin-->
                                <a href="">
                                    <img class="img-responsive" src="admin_area/product_images/product-7.jpg" alt="product 7">
                                </a>

                                <div class="text"><!--text begin-->
                                    <h3><a href="details.php">Product 6</a></h3>

                                    <p class="price">Ksh: 3000</p>
                                </div><!--text end-->

                            </div><!--product same-height end-->
                        </div><!--col-md-3 col-sm-6 center-responsive end-->


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