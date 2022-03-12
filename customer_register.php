<?php

$active = 'Account';
include_once 'includes/header.php';

?>

        <div id="content"><!--content begin-->
            <div class="container"><!--container begin-->
                <div class="col-md-12"><!--col-md-12 begin-->

                    <ul class="breadcrumb"><!--breadcrumb begin-->
                        <li><a href="index.php">Home</a></li>
                        <li>Register</li>
                    </ul><!--breadcrumb end-->

                </div><!--col-md-12 end-->
                <div class="col-md-3"><!--col-md-3 begin-->

                    <!--side bar-->
                    <?php

                    include("includes/sidebar.php");

                    ?>

                </div><!--col-md-3 end-->

                <div class="col-md-9"><!--col-md-9 begin-->

                    <div class="box"><!--box begin-->

                        <div class="box-header"><!--box-header begin-->

                            <center><!--center begin-->

                                <h2>Register a new account</h2>

                            </center><!--center end-->

                            <form action="customer_register.php" method="post" enctype="multipart/form-data"><!--form begin-->

                                <div class="form-group"><!--form-group begin-->
                                    <label>Your Name</label>
                                    <input type="text" class="form-control" name="c_name" required>
                                </div><!--form-group end-->

                                <div class="form-group"><!--form-group begin-->
                                    <label>Your Email</label>
                                    <input type="email" class="form-control" name="c_email" required>
                                </div><!--form-group end-->

                                <div class="form-group"><!--form-group begin-->
                                    <label>Your Password</label>
                                    <input type="password" class="form-control" name="c_pass" required>
                                </div><!--form-group end-->

                                <div class="form-group"><!--form-group begin-->
                                    <label>Your Country</label>
                                    <input type="text" class="form-control" name="c_country" required>
                                </div><!--form-group end-->

                                <div class="form-group"><!--form-group begin-->
                                    <label>Your City</label>
                                    <input type="text" class="form-control" name="c_city" required>
                                </div><!--form-group end-->

                                <div class="form-group"><!--form-group begin-->
                                    <label>Your Contact</label>
                                    <input type="text" class="form-control" name="c_contact" required>
                                </div><!--form-group end-->

                                <div class="form-group"><!--form-group begin-->
                                    <label>Your Address</label>
                                    <input type="text" class="form-control" name="c_address" required>
                                </div><!--form-group end-->

                                <div class="form-group"><!--form-group begin-->
                                    <label>Your Profile Pic</label>
                                    <input type="file" class="form-control" name="c_image" required>
                                </div><!--form-group end-->

                                <div class="text-center"><!--text-center begin-->
                                    <button type="submit" name="register" class="btn btn-primary">
                                        <i class="fa fa-user-md"></i> Register
                                    </button>
                                </div><!--text-center end-->

                            </form><!--form end-->

                        </div><!--box-header end-->

                    </div><!--box end-->

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