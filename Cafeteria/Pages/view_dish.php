<?php
//include('session_login.php');
//Connection
include('conn.php')
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

        <!-- View Dish Start -->
        <?php
        if (isset($_GET['dish'])) {
            $fid = $_GET['dish'];
            $query = "SELECT * FROM `add_items` WHERE `product_id` = '$fid'";
            $res = mysqli_query($conn, $query);
            if ($res) {
                while ($row = mysqli_fetch_assoc($res)) {
                    $id = $row['product_id'];
                    $name = $row['product_name'];
                    $img = $row['product_img'];
                    $i_price = $row['i_p'];
                    $price = $row['product_price'];
                    $category = $row['product_cetegory'];
                    ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img src="img/menu/<?php echo $img; ?>" alt="<?php echo $name ?>"
                                    class="w-75 rounded-3 border-0 border-bottom border-right shadow-lg mb-3">
                            </div>
                            <div class="col-md-8">
                                <h4 class="text-uppercase fw-bold font-medium">
                                    <?php
                                    echo $fid . '). ' . $name . '<span class="text-danger float-end"><a href="menu.php" class="fs-6 text-dark"><i class="fa fa-laugh text-dark mx-3"></i>Good To See!</a></span>';
                                    ?>
                                </h4>
                                <hr class="border-4" style="text-align: justify; text-indent: 45px;">
                                <p class="">
                                    We offer you the best item of our cafeteria, your choice is so good, we hope you would love to
                                    eat this food, have fun. <a href="index.php" class="text-uppercase font-monospace fs-6">Chill
                                        Time Cafeteria <i class="fa fa-utensils"></i></a>.
                                </p>
                                <div class="row product_data">
                                    <div class="col-md-6">
                                        <h5>
                                            <?php
                                            echo '<span class="text-success font-monospace">Rs. ' . $price . ' </span>';
                                            ?>
                                        </h5>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>
                                            <?php
                                            echo '<span class="text-dark font-monospace">Rs. <s class="text-danger">' . $i_price . '</s></span>';
                                            ?>
                                        </h5>
                                    </div>
                                    <div class="my-2"></div>
                                    <form action="buy.php" method="post" class="row">
                                        <div class="col-md-4">
                                            <div class="input-group mb-3">
                                                <button
                                                    class="input-group-text bg-danger text-white rounded-pill border-0 mx-2 decrement-btn">-</button>
                                                <input name="p_qnt"
                                                    class="form-control bg-transparent border-0 border-bottom text-center input-qnt"
                                                    type="number" value="1">
                                                <button
                                                    class="input-group-text bg-primary text-white rounded-pill border-0 mx-2 increment-btn">+</button>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="input-group mb-2">
                                                <input
                                                    class="form-control bg-transparent border-0 text-primary text-center border-bottom mx-2"
                                                    name="name" type="text" placeholder="Name" required>
                                                <input
                                                    class="form-control bg-transparent border-0 text-primary text-center border-bottom mx-2"
                                                    name="email" type="text" placeholder="Email" required>
                                                <input class="form-control bg-transparent border-0 text-primary rounded-pill mx-2"
                                                    name="price" type="text" value="<?php echo $price; ?>" hidden>
                                                <input
                                                    class="form-control col-md-1 bg-transparent border-0 text-dark text-start rounded-pill mx-0"
                                                    name="fid" type="number" value="<?php echo $fid; ?>" hidden>
                                                <button type="submit" name="buy"
                                                    class="btn btn-outline-primary border-0 shadow-sm fw-bold py-2"><i
                                                        class="fa fa-bag me-2"></i>Buy Now</button>
                                            </div>
                                        </div>
                                        <!--<div class="col-md-6">
                                        <button type="submit" name="buy" class="btn btn-outline-danger border-0 shadow-sm fw-bold rounded-pill py-2 addToCartBtn" value="<?php //echo $id; ?>"><i class="fa fa-bag me-2"></i>Buy Now</button>
                                    </div>-->
                                    </form>
                                </div>
                                <hr class="border-4">
                                <h6 class="text-center">Cafeteria</h6>
                                <p class="text-justify text-wrap" style="text-align: justify; text-indent: 45px;">
                                    Chill Time Cafeteria is a cozy and relaxing place to enjoy a cup of coffee, a delicious meal, or
                                    a sweet treat.
                                    Whether you need a break from work, study, or stress, Chill Time Cafeteria offers you a warm and
                                    welcoming atmosphere,
                                    friendly service, and a variety of menu options to suit your taste and mood. You can also savor
                                    a selection of Fast Food,
                                    Meat, Egg Soup,
                                    Egg Dish, Pizza, or Paratha & Vegetables. And don't forget to indulge yourself with a slice of
                                    cake, a muffin, a cookie, or a brownie.
                                    Chill Time Cafeteria also features a spacious outdoor seating area. Come and visit Chill Time
                                    Cafeteria today and experience the best of cafe culture!
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
        } else {
            ?>
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div
                            class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
                            <div class="relative bg-white py-3 pt-10 pb-8 px-10 shadow-xl mx-auto rounded-lg">
                                <div class="divide-y divide-gray-300/50 w-full">
                                    <div class="space-y-6 py-8 text-center text-base text-gray-600">
                                        <h3 class="text-xl text-uppercase font-medium leading-7">
                                            S<i class="fa fa-eye mx-1 fs-5 align-top"></i>mething Went Wr<i
                                                class="fa fa-eye mx-1 fs-5 align-top"></i>ng
                                        </h3>
                                    </div>
                                    <div class="pt-8 text-center text-base font-semibold">
                                        <a href="logout.php"
                                            class="bg-sky-500 hover:bg-sky-600 px-4 py-2 text-dark rounded">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
        <img src="js/cart.js" alt="">
        <!-- View Dish End -->

        <!--Footer & Back to Top-->
        <?php include("..\partials\\footer.php"); ?>

        <!-- JavaScript Libraries -->
        <?php include("..\partials\js_libraries.php"); ?>
        <script>
            /*alertify.set( "notifier", "position", "top-center" );  // Default position
                alertify.set( "notifier", "delay", 2 );  // The default delay delay in seconds
                $('.addToCartBtn').click(function(e){
                    e.preventDefault();
                    var qnt = $(this).closest(".product_date").find(".input-qnt").val();
                    var prod_id = $(this).val();
                    //alertify.success(prod_id);
                    $.ajax({
                        url: "handlecart.php",
                        method: "POST",
                        data: {
                            "prod_id" : prod_id,
                            "prod_qnt": qnt,
                            "scope": "add"
                        },
                        success: function(response){
                            if (response == 201) {
                                alertify.success('<div class="text-center"><span class="text-white">DIsh Added To Cart</span></div>');
                            }
                            else if(response == 401) {
                                alertify.danger('<div class="text-center"><span class="text-white">Please Login to continue</span></div>');
                            }
                            else if(response == 500) {
                                alertify.danger("Oops! Something is wrong.");
                            }
                        }
                    });
                });*/
        </script>
    </body>

</html>