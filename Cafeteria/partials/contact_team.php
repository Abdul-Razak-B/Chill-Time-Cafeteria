<!-- Contact Cards Start -->
<div class="container-xxl py-5">
    <div class="profile-area">
        <div class="container">
            <div class="text-center wow fadeInUp mb-5" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Hawk-Eye</h5>
                <h1 class="mb-4">Our Team</h1>
            </div>
            <div class="row g-5">
                <!-- Cheifs -->
                <?php
                    //Connection
                    include('conn.php');
                    $query = "SELECT * FROM `cheifs` WHERE team like '%hawk%'";
                    $res=mysqli_query($conn, $query);
                    if ($res) {
                        while ($row=mysqli_fetch_assoc($res)) {
                            $id = $row['id'];
                            $bg_img = $row['bg_img'];
                            $img = $row['img'];
                            $n_title = $row['n_title'];
                            $name = $row['name'];
                            $phone = $row['phone'];
                            $roll = $row['roll'];
                            $title = $row['title'];
                            $team = $row['team'];
                            $desig = $row['desig'];
                            $gender = $row['gender'];
                            $fb_link = $row['fb_link'];
                            $insta_link = $row['insta_link'];
                            $twitter_link = $row['twitter_link'];

                            //<ion-icon name="call" class="text-primary"></ion-icon> --- Phone Call
                            //Show Cheifs
                            echo '
                                <div class="col-md-4">
                                    <div class="card">
                                        ';
                                        //Card Bg Img
                                        if($bg_img != null){
                                            echo '
                                                <div class="img1 rounded-circle">
                                                    <img src="img/covers/'.$bg_img.'" alt="'.$name.'" class="m-0 shadow-lg">
                                                </div>
                                            ';
                                        }
                                        else{
                                            if ($gender == "m") {
                                                echo '
                                                    <div class="img1 rounded-circle">
                                                        <img src="img/covers/bcpc.jpg" alt="'.$name.'" class="m-0 shadow-lg">
                                                    </div>
                                                ';
                                            }
                                            else{
                                                echo '
                                                    <div class="img1 rounded-circle">
                                                        <img src="img/covers/gcpc.jpg" alt="'.$name.'" class="m-0 shadow-lg">
                                                    </div>
                                                ';
                                            }
                                        }
                                        //Card Bg Img End
                                        //Card Img
                                        if ($img != null) {
                                            echo '
                                                <div class="img2">
                                                    <img src="img/team/'.$img.'" class="shadow-lg" alt="'.$name.'">
                                                </div>
                                            ';
                                        }
                                        else{
                                            if ($gender == "m") {
                                                echo '
                                                    <div class="img2">
                                                        <img src="img/team/bup.jpeg" class="shadow-lg" alt="'.$name.'">
                                                    </div>
                                                ';
                                            }
                                            else {
                                                echo '
                                                    <div class="img2">
                                                        <img src="img/team/gup.jpg" class="shadow-lg" alt="'.$name.'">
                                                    </div>
                                                ';
                                            }
                                        }
                                        //Card Img End
                                        echo '
                                        <div class="main-text">
                                            <h2 class="fs-5 text-tertiary text-capitalize">'.$n_title.'. '.$name.'</h2>
                                            <h4 class="fw-bolder fs-6 text-secondary"><span class="text-dark">'.$title.'</span></h4>
                                            ';
                                            //Number
                                            if ($phone != null) {
                                                echo '
                                                <p class="text-tertiary">
                                                <i class="fa fa-plus-circle mx-1"></i>
                                                '.$phone.'
                                                </p>
                                                ';
                                            }
                                            else{
                                                echo '<p class="text-tertiary text-uppercase"><i class="fa fa-ban text-danger mx-2"></i>+92 333 -------</p>';
                                            }
                                            //Emails
                                            if ($fb_link != null) {

                                                echo '
                                                <div class="d-flex justify-content-center mt-3 ">
                                                    <a href="'.$fb_link.'"><ion-icon class="ionicons btn accordion-collapse mx-0 text-secondary fs-5" name="logo-facebook"></ion-icon></a>
                                                    <a href="'.$insta_link.'"><ion-icon class="ionicons btn accordion-collapse mx-0 text-secondary fs-5" name="logo-instagram"></ion-icon></a>
                                                    <a href="'.$twitter_link.'"><ion-icon class="ionicons btn accordion-collapse mx-0 text-secondary fs-5" name="logo-twitter"></ion-icon></a>
                                                </div>';
                                            }
                                            else{
                                                echo '
                                                <div class="d-flex justify-content-center mt-3 ">
                                                    <a href="#Facebook-'.$name.'"><ion-icon class="ionicons btn accordion-collapse mx-0 text-secondary fs-5" name="logo-facebook"></ion-icon></a>
                                                    <a href="#Instagram-'.$name.'"><ion-icon class="ionicons btn accordion-collapse mx-0 text-secondary fs-5" name="logo-instagram"></ion-icon></a>
                                                    <a href="#Twitter-'.$name.'"><ion-icon class="ionicons btn accordion-collapse mx-0 text-secondary fs-5" name="logo-twitter"></ion-icon></a>
                                                </div>';
                                            }
                                            echo '
                                        </div>
                                    </div>
                                </div>
                            ';
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- Contact Cards End -->