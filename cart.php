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
                            
                            <p class="text-muted">You currently have <?php echo $cart_count; ?> item(s) in your cart</p>

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

                                        <?php
                                        // To get the total amount
                                        $total = 0;
                                        $stmt = $cart->read();
                                        while($record = $stmt->fetch(PDO::FETCH_ASSOC)){
                                            $product->product_id = $record['p_id'];
                                            $cart->quantity = $record['quantity'];
                                            $cart->size = $record['size'];

                                            $product->readOne();

                                            $sub_total = $product->product_price * $cart->quantity;

                                            $total += $sub_total;
                                        ?>

                                        <tr><!--tr begin-->

                                            <td>

                                                <img class="img-responsive" src="admin_area/product_images/<?php echo $product->product_img1 ?>" alt="<?php echo $product->product_title; ?>">

                                            </td>

                                            <td>
                                                <a href="details.php?pro_id=<?php echo $product->product_id; ?>"><?php echo $product->product_title; ?></a>
                                            </td>

                                            <td>

                                                <?php echo $cart->quantity; ?>

                                            </td>

                                            <td>

                                                ksh : <?php echo $product->product_price; ?>

                                            </td>

                                            <td>

                                            <?php echo $cart->size; ?>

                                            </td>

                                            <td>

                                                <input type="checkbox" name="remove[]" value="<?php echo $product->product_id ?>">

                                            </td>

                                            <td>

                                                <?php echo $sub_total; ?>

                                            </td>

                                        </tr><!--tr end-->
                                        <?php
                                        }

                                        ?>

                                    </tbody><!--tbody end-->

                                    <tfoot><!--tfoot begin-->

                                        <tr><!--tr begin-->

                                            <th colspan="5">Total</th>
                                            <th colspan="2">Ksh: <?php echo $total; ?></th>

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

                    <?php

                        if(isset($_POST['update'])){
                            foreach($_POST['remove'] as $remove_id) {
                                $cart->p_id = $remove_id;
                                if($cart->delete()) {
                                    ?>
                                        <script> window.open('cart.php', '_self') </script>
                                    <?php
                                }
                            }
                        }

                    ?>

                    
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
                                        <td>ksh: <?php echo $total; ?></td>
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
                                        <th>ksh:<?php echo $total; ?></th>
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