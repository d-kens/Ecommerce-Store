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

        <?php

            if(isset($_POST['register'])) {
                $user->name = $_POST['c_name'];
                $user->email = $_POST['c_email'];
                $user->password = $_POST['c_pass'];
                $user->contact = $_POST['c_contact'];
                $user->address = $_POST['c_address'];
                $user->profile_image = $_FILES['c_image']['name'];
                $user->ip_address = getRealIpUser();

                if($user->register()) {
                    // move uploaded image
                    echo $user->uploadPhoto();

                    $cart->ip_address = getRealIpUser();
                    $num = $cart->count();

                    // If registred with items in cart
                    if($num > 0) {
                        // Problem with the session - to do
                        $_SESSION['customer_email'] = $_POST['c_email'];
                        ?>
                            <script>
                                alert('You have been registered successfully.')
                            </script>
                            <script>
                                window.open('checkout.php','_self');
                            </script>
                        <?php
                    }
                    // If registred without items in cart
                    else {

                        // Problem with the session - to do
                        $_SESSION['customer_email'] = $_POST['c_email'];
                        ?>
                            <script>
                                alert('You have been registered successfully.')
                            </script>
                            <script>
                                window.open('index.php','_self');
                            </script>
                        <?php
                    }
                }
                else {
                    ?>
                        <div class="alert alert-danger">
                            Registration failed.
                        </div>
                    <?php
                }
            }


        ?>



        <!--Footer-->
        <?php

        include("includes/footer.php");

        ?>

        <script src="js/jquery-331.min.js"></script>
        <script src="js/bootstrap-337.min.js"></script>
    </body>
</html>