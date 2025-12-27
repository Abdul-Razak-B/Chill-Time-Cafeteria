<!-- Menu Start -->
<!-- Recent Sales Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                <h1 class="mb-5">Delicious Food</h1>
            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                            <ion-icon name="fast-food" class="fa-2x"></ion-icon>
                            <div class="ps-3">
                                <small class="text-body">All</small>
                                <h6 class="mt-n1 mb-0">Dishes</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3" data-bs-toggle="pill" href="#tab-2">
                            <i class="fa fa-coffee fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Fresh</small>
                                <h6 class="mt-n1 mb-0">Breakfast</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-3">
                            <i class="fa fa-hamburger fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Special</small>
                                <h6 class="mt-n1 mb-0">Launch</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-4">
                            <i class="fa fa-utensils fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Lovely</small>
                                <h6 class="mt-n1 mb-0">Dinner</h6>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-3">
                            <?php
                                $url_fetch = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1);
                                //Dishes
                                $query = "SELECT * FROM `add_items`";
                                $res=mysqli_query($conn, $query);
                                if ($res) {
                                    while ($row=mysqli_fetch_assoc($res)) {
                                        $product_id = $row['product_id'];
                                        $product_name = $row['product_name'];
                                        $product_img = $row['product_img'];
                                        $product_price = $row['product_price'];
                                        $product_category = $row['product_cetegory'];
                                        $truncate_items = 'truncate';
                                        
                                        //List Print
                                        echo '
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center">
                                        ';
                                        
                                        if($product_img != null){
                                            echo '<img class="flex-shrink-0 img-fluid rounded" src="img/menu/'.$product_img.'" alt="'.$product_name.'" style="width: 80px;">';
                                        }
                                        else{
                                            echo '
                                            <span class="text-center border-0 align-middle">
                                            <img src="img/Profile/logo.jpg" style="width: 75px">
                                            </span>
                                            ';
                                        }
                                        echo '
                                                <div class="w-75 d-flex flex-column text-start ps-4">
                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                        <span class="text-capitalize">'.$product_name.'</span>
                                                        <span class="text-primary">'.$product_price.'</span>
                                                    </h5>
                                                </div>
                                                <div class="w-auto d-flex flex-column text-center ps-4">
                                                    <h5 class="d-flex justify-content-between pb-2">
                                                        <a href="view_dish.php?dish='.$product_id.'" class="bg-transparent text-dark border-0 btn-sm-square mx-2">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        ';
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <?php
                                $url_fetch = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1);
                                //Dishes
                                $query = "SELECT * FROM `add_items` WHERE product_cetegory LIKE '%breakfast%'";
                                $res=mysqli_query($conn, $query);
                                if ($res) {
                                    while ($row=mysqli_fetch_assoc($res)) {
                                        $product_id = $row['product_id'];
                                        $product_name = $row['product_name'];
                                        $product_img = $row['product_img'];
                                        $product_price = $row['product_price'];
                                        $product_category = $row['product_cetegory'];
                                        $truncate_items = 'truncate';
                                        
                                        //List Print
                                        echo '
                                            <div class="col-lg-6">
                                                <div class="d-flex align-items-center">
                                        ';
                                        
                                        if($product_img != null){
                                            echo '
                                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu/'.$product_img.'" alt="'.$product_name.'" style="width: 80px;">
                                            ';
                                        }
                                        else{
                                            echo '
                                            <span class="text-center border-0 align-middle">
                                                <img src="img/Profile/logo.jpg" style="width: 75px">
                                            </span>
                                            ';
                                        }
                                        echo '
                                                <div class="w-75 d-flex flex-column text-start ps-4">
                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                        <span class="text-capitalize">'.$product_name.'</span>
                                                        <span class="text-primary">'.$product_price.'</span>
                                                    </h5>
                                                </div>
                                                <div class="w-auto d-flex flex-column text-center ps-4">
                                                    <h5 class="d-flex justify-content-between pb-2">
                                                        <a href="view_dish.php?dish='.$product_id.'" class="bg-transparent text-dark border-0 btn-sm-square mx-2">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        ';
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <?php
                                $url_fetch = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1);
                                //Dishes
                                $query = "SELECT * FROM `add_items` WHERE product_cetegory LIKE '%lunch%'"; 
                                $res=mysqli_query($conn, $query);
                                if ($res) {
                                    while ($row=mysqli_fetch_assoc($res)) {
                                        $product_id = $row['product_id'];
                                        $product_name = $row['product_name'];
                                        $product_img = $row['product_img'];
                                        $product_price = $row['product_price'];
                                        $product_category = $row['product_cetegory'];
                                        $truncate_items = 'truncate';
                                        
                                        //List Print
                                        echo '
                                            <div class="col-lg-6">
                                                <div class="d-flex align-items-center">
                                        ';
                                        
                                        if($product_img != null){
                                            echo '
                                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu/'.$product_img.'" alt="" style="width: 80px;">
                                            ';
                                        }
                                        else{
                                            echo '
                                            <span class="text-center border-0 align-middle">
                                            <img src="img/Profile/logo.jpg" style="width: 75px">
                                            </span>
                                            ';
                                        }
                                        echo '
                                                <div class="w-75 d-flex flex-column text-start ps-4">
                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                        <span class="text-capitalize">'.$product_name.'</span>
                                                        <span class="text-primary">'.$product_price.'</span>
                                                    </h5>
                                                </div>
                                                <div class="w-auto d-flex flex-column text-center ps-4">
                                                    <h5 class="d-flex justify-content-between pb-2">
                                                        <a href="view_dish.php?dish='.$product_id.'" class="bg-transparent text-dark border-0 btn-sm-square mx-2">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        ';
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    <div id="tab-4" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <?php
                                $url_fetch = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1);
                                //Dishes
                                $query = "SELECT * FROM `add_items` WHERE product_cetegory LIKE '%dinner%'"; 
                                $res=mysqli_query($conn, $query);
                                if ($res) {
                                    while ($row=mysqli_fetch_assoc($res)) {
                                        $product_id = $row['product_id'];
                                        $product_name = $row['product_name'];
                                        $product_img = $row['product_img'];
                                        $product_price = $row['product_price'];
                                        $product_category = $row['product_cetegory'];
                                        $truncate_items = 'truncate';
                                        
                                        //List Print
                                        echo '
                                            <div class="col-lg-6">
                                                <div class="d-flex align-items-center">
                                        ';
                                        
                                        if($product_img != null){
                                            echo '
                                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu/'.$product_img.'" alt="" style="width: 80px;">
                                            ';
                                        }
                                        else{
                                            echo '
                                            <span class="text-center border-0 align-middle">
                                            <img src="img/Profile/logo.jpg" style="width: 75px">
                                            </span>
                                            ';
                                        }
                                        echo '
                                                <div class="w-75 d-flex flex-column text-start ps-4">
                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                        <span class="text-capitalize">'.$product_name.'</span>
                                                        <span class="text-primary">'.$product_price.'</span>
                                                    </h5>
                                                </div>
                                                <div class="w-auto d-flex flex-column text-center ps-4">
                                                    <h5 class="d-flex justify-content-between pb-2">
                                                        <a href="view_dish.php?dish='.$product_id.'" class="bg-transparent text-dark border-0 btn-sm-square mx-2">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </h5>
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
        </div>
    </div>
<!-- Recent Sales Start End -->
<!-- Menu Start End -->
