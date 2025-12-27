<?php
//include('session_login.php');
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

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div
                        class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
                        <div class="relative bg-white pt-10 pb-8 px-10 shadow-xl mx-auto rounded-lg">
                            <div class="divide-y divide-gray-300/50 w-full">
                                <div class="space-y-6 py-8 text-base text-gray-600">
                                    <p class="text-xl font-medium leading-7">Welcome to the PHP Login System member page
                                    </p>
                                </div>
                                <div class="pt-8 text-base font-semibold">
                                    <a href="logout.php"
                                        class="bg-sky-500 hover:bg-sky-600 px-4 py-2 text-white rounded">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!--Footer & Back to Top-->
        <?php include("..\partials\\footer.php"); ?>

        <!-- JavaScript Libraries -->
        <?php include("..\partials\js_libraries.php"); ?>
    </body>

</html>