<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include("..\partials\meta_data.php"); ?>
    </head>

    <body>

        <!-- Spinner Start -->
        <?php include("..\partials\loader.php"); ?>

        <div class="container-xxl bg-white p-0">
            <!-- Navbar & Hero Start -->
            <?php include("..\partials\\navbar.php"); ?>
            <?php include("database/cafe_conn.php"); ?>

            <!-- Menu -->
            <?php include("..\partials\menu.php"); ?>

            <!-- Footer -->
            <?php include("..\partials\\footer.php"); ?>

        </div>

        <!-- JavaScript Libraries -->
        <?php include("..\partials\js_libraries.php"); ?>

    </body>

</html>