<?php

$active = 'Home';
include_once 'includes/header.php';

?>


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
                                    <img src="admin_area/slides_images/<?= $row['slide_image']; ?>" alt="Slider Image 2">
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

                <?php
                    //query product
                    $stmt = $product->readAll();

                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        extract($row);

                        ?>
                            <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->

                                <div class="product"><!--product begin-->

                                    <a href="details.php?<?php echo $product_id; ?>">
                                        <img class="img-responsive" src="admin_area/product_images/<?php echo $product_img1; ?>" alt="<?php echo $product_title; ?>">
                                    </a>

                                    <div class="text"><!--text begin-->

                                        <h3>
                                            <a href="details.php"> <?php echo $product_title; ?> </a>
                                        </h3>

                                        <p class="price"> <?php echo $product_price; ?> </p>

                                        <p class="button">
                                            <a href="details.php?<?php echo $product_id; ?>" class="btn btn-default">View Deatils</a>
                                            <a href="details.php?<?php echo $product_id; ?>" class="btn btn-primary">
                                                <i class="fa fa-shopping-cart">
                                                    Add To Cart
                                                </i>
                                            </a>
                                        </p>

                                    </div><!--text end-->

                                </div><!--product end-->

                            </div><!--col-sm-4 col-sm-6 single end -->
                        <?php
                    }

                ?>

                <!--Static product images-->
            
                

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