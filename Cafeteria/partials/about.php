<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 rounded-3 wow zoomIn" data-wow-delay="0.1s" src="img/canteen/canteen 1.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 rounded-3 wow zoomIn" data-wow-delay="0.3s" src="img/canteen/canteen 2.jpg" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 rounded-3 wow zoomIn" data-wow-delay="0.5s" src="img/canteen/canteen 3.jpg">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 rounded-3 wow zoomIn" data-wow-delay="0.7s" src="img/canteen/canteen 4.jpg">
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Cafeteria</h5>
                <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i><br>Chill Time Cafeteria</h1>
                <p class="mb-4">We are welcome you at our website.</p>
                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">
                            <?php
                                function calculateYears($date1, $date2) {
                                    $datetime1 = new DateTime($date1);
                                    $datetime2 = new DateTime($date2);
                                    $interval = $datetime1->diff($datetime2);
                                    return $interval->format('%y');
                                }

                                $date1 = "2017-01-01";
                                $date2 = date('Y-m-d');
                                echo calculateYears($date1, $date2);
                            ?>
                            </h1>
                            <div class="ps-4">
                                <p class="mb-0">Years of</p>
                                <h6 class="text-uppercase mb-0">Experience</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">
                            <?php
                                include('conn.php');  //include database connection
                                //Total Dishes
                                $cheifs = $conn->query("SELECT * FROM `cheifs` WHERE desig LIKE '%Student%' AND team LIKE '%Hawk-Eye%'");
                                if($cheifs){
                                    if ($cheifs->num_rows == 0) {
                                        echo '<span class="text-warning">'.$cheifs->num_rows.'</span>';
                                    }
                                    else{
                                        echo '<span class="text-white">'.$cheifs->num_rows.'</span>';
                                    }
                                }
                            ?>
                            </h1>
                            <div class="ps-4">
                                <p class="mb-0">Popular</p>
                                <h6 class="text-uppercase mb-0">Master Chefs</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Description Section -->
<?php //include('about_description.php'); ?>
<!-- Description Section End -->
<!-- About End -->