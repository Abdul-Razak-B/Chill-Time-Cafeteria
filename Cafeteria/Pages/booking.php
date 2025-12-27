<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include("..\partials\meta_data.php"); ?>
    </head>

    <body>
        <div class="container-xxl bg-white p-0">
            <!-- Spinner Start -->
            <?php include("..\partials\loader.php"); ?>


            <!-- Navbar & Hero Start -->
            <div class="container-xxl position-relative p-0">
                <?php include("..\partials\navbar_booking.php"); ?>
                <div class="container-xxl py-5 bg-dark hero-header mb-5">
                    <div class="container text-center my-5 pt-5 pb-4">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Booking For Table</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center text-uppercase">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Navbar & Hero End -->

            <!-- Reservation -->
            <?php include("..\partials\booking.php"); ?>

            <!-- Footer -->
            <?php include("..\partials\\footer.php"); ?>

        </div>

        <!-- JavaScript Libraries -->
        <?php include("..\partials\js_libraries.php"); ?>

    </body>

</html>php