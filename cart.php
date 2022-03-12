<?php

$active = 'Cart';
include_once 'includes/header.php';

?>

        <div id="content"><!--content begin-->
            <div class="container"><!--container begin-->
                <div class="col-md-12"><!--col-md-12 begin-->

                    <ul class="breadcrumb"><!--breadcrumb begin-->
                        <li><a href="index.php">Home</a></li>
                        <li>Cart</li>
                    </ul><!--breadcrumb end-->

                </div><!--col-md-12 end-->

                <div id="cart" class="col-md-9"><!--col-md-9 begin-->

                    <div class="box"><!--box begin-->

                        <form action="cart.php" method="post" enctype="multipart/form-data"><!--form begin-->

                            <h1>Shopping Cart</h1>
                            <p class="text-muted">You currently have 3 item(s) in your cart</p>

                            <div class="table-responsive"><!--table-responsive begin-->

                                <table class="table"><!--table begin-->

                                    <thead><!--thead begin-->
                                        <tr><!--tr begin-->

                                            <th colspan="2">Product</th>
                                            <th>Quantity</th>
                                            <th>Unit Price</th>
                                            <th>Size</th>
                                            <th colspan="1">Delete</th>
                                            <th colspan="2">Sub-Total</th>

                                        </tr><!--tr end-->
                                    </thead><!--thead end-->

                                    <tbody><!--tbody begin-->

                                        <tr><!--tr begin-->

                                            <td>

                                                <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">

                                            </td>

                                            <td>
                                                <a href="#">Product 1</a>
                                            </td>

                                            <td>

                                                2

                                            </td>

                                            <td>

                                                ksh : 3000

                                            </td>

                                            <td>

                                                Large

                                            </td>

                                            <td>

                                                <input type="checkbox" name="remove[]">

                                            </td>

                                            <td>

                                                Ksh: 30000

                                            </td>

                                        </tr><!--tr end-->

                                    </tbody><!--tbody end-->

                                    <tbody><!--tbody begin-->

                                        <tr><!--tr begin-->

                                            <td>

                                                <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">

                                            </td>

                                            <td>
                                                <a href="#">Product 1</a>
                                            </td>

                                            <td>

                                                2

                                            </td>

                                            <td>

                                                ksh : 3000

                                            </td>

                                            <td>

                                                Large

                                            </td>

                                            <td>

                                                <input type="checkbox" name="remove[]">

                                            </td>

                                            <td>

                                                Ksh: 30000

                                            </td>

                                        </tr><!--tr end-->

                                    </tbody><!--tbody end-->

                                    <tbody><!--tbody begin-->

                                        <tr><!--tr begin-->

                                            <td>

                                                <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">

                                            </td>

                                            <td>
                                                <a href="#">Product 1</a>
                                            </td>

                                            <td>

                                                2

                                            </td>

                                            <td>

                                                ksh : 3000

                                            </td>

                                            <td>

                                                Large

                                            </td>

                                            <td>

                                                <input type="checkbox" name="remove[]">

                                            </td>

                                            <td>

                                                Ksh: 30000

                                            </td>

                                        </tr><!--tr end-->

                                    </tbody><!--tbody end-->

                                    <tfoot><!--tfoot begin-->

                                        <tr><!--tr begin-->

                                            <th colspan="5">Total</th>
                                            <th colspan="2">Ksh: 30000</th>

                                        </tr><!--tr end-->

                                    </tfoot><!--tfoot end-->

                                </table><!--table end-->

                            </div><!--table responsive end-->

                            <div class="box-footer"><!--box-footer begin-->

                                <div class="pull-left"><!--pull-left begin-->

                                    <a href="index.php" class="btn btn-default"><!--btn btn-default begin-->

                                        <i class="fa fa-chevron-left"></i> Continue Shopping

                                    </a><!--btn btn-default end-->

                                </div><!--pull-left end-->

                                <div class="pull-right"><!--pull-right begin-->

                                    <button type="submit" name="update" value="Update Cart" href="index.php" class="btn btn-default"><!--btn btn-default begin-->

                                        <i class="fa fa-refresh"></i> Update Cart

                                    </button><!--btn btn-default end-->

                                    <a href="checkout.php" class="btn btn-primary">

                                        Proceed Checkout <i class="fa fa-chevron-right"></i>

                                    </a>

                                </div><!--pull-right end-->

                            </div><!--box-footer end-->

                        </form><!--form end-->

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

                </div><!--col -md-9 end-->

                <div class="col-md-3"><!--col-md-3 begin-->

                    <div id="order-summary" class="box"><!--box start-->

                        <div class="box-header"><!--box-header begin-->

                            <h3>Order Summary</h3>

                        </div><!--box-header end-->

                        <p class="text-muted"><!--text-muted begin-->

                            Shipping and additional costs are calculated based on value you have entered

                        </p><!--text-muted end-->

                        <div class="table-responsive"><!--table-responsive begin-->

                            <table class="table"><!--table begin-->

                                <tbody><!--tbody begin-->

                                    <tr><!--tr begin-->
                                        <td>Order Sub-Total</td>
                                        <td>ksh:30000</td>
                                    </tr><!--tr end-->

                                    <tr><!--tr begin-->
                                        <td>Shipping and Handling</td>
                                        <td>ksh:0</td>
                                    </tr><!--tr end-->

                                    <tr><!--tr begin-->
                                        <td>Tax</td>
                                        <td>ksh:0</td>
                                    </tr><!--tr end-->

                                    <tr class="total"><!--tr begin-->
                                        <td>Total</td>
                                        <th>ksh:30000</th>
                                    </tr><!--tr end-->

                                </tbody><!--tbody end-->
                            
                            </table><!--table end-->

                        </div><!--table-responsive end-->

                    </div><!--box end-->

                </div><!--col-md-3 end-->

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