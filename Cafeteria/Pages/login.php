<?php
//$conn = new mysqli('localhost', 'root', '', 'cafe');
?>

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
        <!-- Navbar & Hero Start End -->

        <!-- Login Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <form action="login_query.php" method="post"
                        class="form-control bg-transparent px-lg-3 py-lg-3 border-0" autocomplete="on">
                        <div
                            class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
                            <div
                                class="relative bg-white pt-10 pb-8 px-10 shadow-xl mx-auto w-50 rounded shadow-lg border-bottom">
                                <div class="divide-y divide-gray-300/50 w-full px-4 py-4 text-center">
                                    <div class="space-y-6 py-8 text-base  text-gray-600">

                                        <div class="modal-header border-0 bg-transparent justify-content-around">
                                            <h1 class="modal-title fs-5 text-primary text-uppercase">Login</h1>
                                        </div>

                                        <div class="space-y-4 col-md-12 text-center justify-content-around">
                                            <div class="space-y-4 col-md-12 text-center justify-content-around">
                                                <input type="email" name="email" placeholder="Email"
                                                    class="border-0 bg-white btn btn-light text-center fw-bolder text-dark align-content-around form-control py-2 my-2 border-bottom shadow-sm"
                                                    required />

                                                <input type="password" name="password" placeholder="Password"
                                                    class="border-0 bg-white btn btn-light text-center fw-bolder text-dark align-content-around form-control py-2 my-2 border-bottom shadow-sm"
                                                    required />
                                            </div>
                                        </div>
                                        <!--<button type="submit" class="btn btn-lg btn-outline-secondary mt-6">Submit</button>-->
                                    </div>
                                    <h5 class="my-4 text-dark">
                                        if already have an account,
                                        <a href="register.php" class="text-capitalize">
                                            <i class="fa fa-user-plus fs-5 text-capitalize mx-1"></i>
                                            click here
                                        </a>
                                        to login!
                                    </h5>
                                    <div class="mt-3 mb-3"></div>
                                    <div class="modal-footer border-0 justify-content-around">
                                        <button type="submit" name="login" class="btn btn-lg btn-primary mt-4 col-md-2">
                                            <i class="fa fa-user-shield fs-5"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Login End -->

        <!--Footer & Back to Top-->
        <?php //include("/xampp/htdocs/!!!/Cafeteria/partials/footer.php"); ?>

        <!-- JavaScript Libraries -->
        <?php include("..\partials\js_libraries.php"); ?>
    </body>

</html>