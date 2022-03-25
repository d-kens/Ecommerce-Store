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

                <div class="col-md-9">
                    <!--Some code goes here -->
                    <?php

                        if(isset($_SESSION['logged_in'])) {
                            include ("payment_options.php");
                        }
                        else {
                            include ("customer/customer_login.php");
                        }

                    ?>

                </div>


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