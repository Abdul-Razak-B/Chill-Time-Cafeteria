<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include("..\partials\meta_data.php"); ?>
    </head>

    <body>
        <!-- Spinner -->
        <?php include("..\partials\loader.php"); ?>

        <!-- Navbar & Hero Start -->
        <?php include("..\partials\\navbar.php"); ?>

        <!-- Register Start -->
        <div class="container mb-3">
            <div class="row g-5 align-items-center">
                <form method="post" class="form-control bg-transparent px-lg-3 py-lg-3 border-0" autocomplete="off">
                    <div
                        class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
                        <div
                            class="relative bg-white pt-10 pb-8 px-10 shadow-xl mx-auto w-75 rounded shadow-lg border-bottom">
                            <div class="divide-y divide-gray-300/50 w-full px-4 py-4 text-center">
                                <div class="space-y-6 py-8 text-center  text-gray-600">
                                    <?php
                                    //Connection
                                    include('conn.php');

                                    //Classes Start
                                    $ic = ' 
                                border-0 
                                bg-light 
                                btn btn-light 
                                text-center 
                                fw-bolder 
                                text-dark 
                                text-capitalize 
                                align-content-around 
                                border-bottom 
                                shadow-sm 
                                rounded-3 
                                ';
                                    $imp = ' py-2 my-2 ';
                                    $col_1 = ' col-1 ';
                                    $col_2 = ' col-2 ';
                                    $col_3 = ' col-3 ';
                                    $col_4 = ' col-4 ';
                                    $col_5 = ' col-5 ';
                                    $col_5 = ' col-6 ';
                                    //Classes End
                                    
                                    //Icons
                                    $validation_icons = ''; //'<i class="fas fa-check-circle"></i> <i class="fas fa-exclamation-circle"></i>';
                                    //Icons End
                                    
                                    //Error Msg
                                    $err_msg = '';//'<small>Error Msg</small>';
                                    //Error Msg End
                                    
                                    //Insertion
                                    if (isset($_POST['submit'])) {

                                        $name = $_POST['name'];
                                        $img = $_POST['img'];
                                        $username = $_POST['username'];
                                        $email = $_POST['email'];
                                        $password = $_POST['password'];
                                        $city = $_POST['city'];
                                        $country = $_POST['country'];
                                        $phone = $_POST['cc'] . $_POST['sc'] . $_POST['phone'];
                                        //CURRENT_DATE //NOW()
                                        //$date = $_POST['date'];
                                        //$dob = date('Y-m-d', strtotime($_POST['dob']));
                                        $dob = $_POST['dob'];
                                        $datetime = new DateTime($dob);
                                        $f_dob = $datetime->format('Y-m-d H:i:s');

                                        if ($name != null && $username != null && $email != null && $password != null && $phone != null) {
                                            $users = "INSERT INTO users (`date`, `dob`, `name`, `img`, `username`, `email`, `password`, `city`, `country`, `phone`)
                                                VALUES (NOW(), '$f_dob', '$name', '$img', '$username', '$email', '$password', '$city', '$country', '$phone')";
                                            $result = mysqli_query($conn, $users);
                                            if (!$result) {
                                                ?>
                                    <script>
                                    alertify.set('notifier', 'position', 'top-center');
                                    alertify.error('Error');
                                    </script>
                                    <?php
                                            } else {
                                                //$success_msg = '<div class="alert alert-warning alert-dismissible fade show""><i class="fa fa-utensils"></i>&nbsp;&nbsp;Item Stored!</div>';
                                                ?>
                                    <script>
                                    //alertify.confirm('Confirm Title', 'Confirm Message', function(){ alertify.success('Item Successfully Added') }
                                    //, function(){ alertify.error('Cancel')});
                                    alertify.set('notifier', 'position', 'top-center');
                                    alertify.success('Account Successfully Created!');
                                    </script>
                                    <?php
                                            }
                                        } else {
                                            ?>
                                    <script>
                                    //alertify.confirm('Confirm Title', 'Confirm Message', function(){ alertify.success('Item Successfully Added') }
                                    //, function(){ alertify.error('Cancel')});
                                    alertify.set('notifier', 'position', 'top-center');
                                    alertify.danger('User Not Added Please Fill Necessary Information');
                                    </script>
                                    <?php
                                        }
                                    }
                                    ?>

                                    <div class="modal-header border-0 bg-transparent justify-content-around">
                                        <h1 class="modal-title fs-2 text-primary text-uppercase fw-bolder d-flex">
                                            <div
                                                class="bg-dark btn btn-light text-center align-content-around border-0 shadow-lg col-0 rounded-circle px-1 py-1 mx-4">
                                            </div>
                                            Register
                                            <div
                                                class="bg-dark btn btn-light text-center align-content-around border-0 shadow-lg col-0 rounded-circle px-1 py-1 mx-4">
                                            </div>
                                        </h1>
                                    </div>

                                    <div class="space-y-4 col-md-12 text-left justify-content-around text-dark">
                                        <input type="text" name="name" value="Shah Latif" id="r_name"
                                            class="<?php echo $ic . $imp . $col_4; ?>" required />
                                        <?php echo $validation_icons . $err_msg; ?>

                                        <input type="file" name="img" placeholder="Upload Image" id="r_file"
                                            class="<?php echo $ic . $imp . $col_5; ?>" />
                                        <?php echo $validation_icons . $err_msg; ?>

                                        <input type="date" name="dob" placeholder="DOB" id="r_dob"
                                            class="<?php echo $ic . $imp . $col_2; ?>" required />
                                        <?php echo $validation_icons . $err_msg; ?>

                                        <input type="text" name="city" value="Ghotki" id="r_city"
                                            class="<?php echo $ic . $imp . $col_2; ?>" required />
                                        <?php echo $validation_icons . $err_msg; ?>

                                        <input type="text" name="country" value="Pakistan" id="r_country"
                                            class="<?php echo $ic . $imp . $col_3; ?>" required />
                                        <?php echo $validation_icons . $err_msg; ?>

                                        <input type="email" name="email" placeholder="xyz@example.com" id="r_email"
                                            class="<?php echo $ic . $imp; ?>" required />
                                        <?php echo $validation_icons . $err_msg; ?>

                                        <input type="text" name="username" placeholder="Username" id="r_username"
                                            class="<?php echo $ic . $imp . $col_4; ?>" required />
                                        <?php echo $validation_icons . $err_msg; ?>

                                        <input type="password" name="password" placeholder="Password" id="r_password"
                                            class="<?php echo $ic . $imp . $col_3; ?>" required />
                                        <?php echo $validation_icons . $err_msg; ?>

                                        <input type="password" name="cpassword" placeholder="Confirm Password"
                                            id="r_cpassword" class="<?php echo $ic . $imp . $col_3; ?>" required />
                                        <?php echo $validation_icons . $err_msg; ?>

                                        <!--
                                    <label class="text-uppercase text-primary fw-bold">Birthdate</label>
                                    <input type="date"
                                    name="dob"
                                    id="r_dob"
                                    class="border-0 bg-light btn btn-light text-center fw-bolder text-dark text-uppercase align-content-around py-2 mx-4 my-3 border-bottom shadow-sm col-3 rounded-3"
                                    required
                                    />
                                    
                                    <label class="text-uppercase text-primary fw-bold">date today</label>
                                    <input type="date"
                                    name="date"
                                    placeholder="Birthdate"
                                    class="border-0 bg-light btn btn-light text-center fw-bolder text-dark text-uppercase align-content-around py-2 mx-4 my-3 border-bottom shadow-sm col-3 rounded-3"
                                    required
                                    />-->

                                        <label class="text-uppercase text-primary fw-bold">Phone Number</label>

                                        <input type="text" name="cc" value="+92" id="r_phone"
                                            class="<?php echo $ic . $imp . $col_1; ?>" required />

                                        <label class="text-uppercase text-primary fw-bold">-</label>
                                        <?php echo $validation_icons . $err_msg; ?>

                                        <input type="number" name="sc" placeholder="335" min="300" id="r_phone"
                                            class="<?php echo $ic . $imp . $col_2; ?>" required />
                                        <label class="text-uppercase text-primary fw-bold">-</label>
                                        <?php echo $validation_icons . $err_msg; ?>

                                        <input type="number" name="phone" placeholder="***** 99" min="0000000"
                                            id="r_phone" class="<?php echo $ic . $imp . $col_3; ?>" required />
                                        <?php echo $validation_icons . $err_msg; ?>
                                    </div>
                                </div>
                                <h5 class="my-2 mt-3">
                                    if already have an account,
                                    <a href="login.php">
                                        <i class="fa fa-user-shield mx-1 text-capitalize"></i>
                                        click here
                                    </a>
                                    to login!
                                </h5>
                                <div class="mt-3 mb-3"></div>
                                <div class="modal-footer border-0 justify-content-around">
                                    <button type="submit" name="submit" class="btn btn-primary col-md-2">
                                        <i class="fa fa-user-plus fs-5 text-capitalize"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Register End -->

        <!--Footer & Back to Top-->
        <?php //include("/xampp/htdocs/!!!/Cafeteria/partials/footer.php"); ?>

        <!-- JavaScript Libraries -->
        <?php include("..\partials\js_libraries.php"); ?>
    </body>

</html>