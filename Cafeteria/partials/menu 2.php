<!-- Menu Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
            <h1 class="mb-5">More Delicious Items</h1>
        </div>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="tab-content">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-0">
                            <i class="fa fa-utensils fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Popular</small>
                                <h6 class="mt-n1 mb-0">All</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3" data-bs-toggle="pill" href="#tab-1">
                            <i class="fa fa-coffee fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Popular</small>
                                <h6 class="mt-n1 mb-0">Breakfast</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                            <i class="fa fa-hamburger fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Special</small>
                                <h6 class="mt-n1 mb-0">Launch</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                            <i class="fa fa-utensils fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Lovely</small>
                                <h6 class="mt-n1 mb-0">Dinner</h6>
                            </div>
                        </a>
                    </li>
                </ul>
                <div id="tab-0" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <!-- Buttons Start -->
                        <div class="d-flex justify-content-end">
                            <a href="menu.php" class="bg-transparent text-secondary text-capitalize border-0 pt-2 mx-2">
                                <i class="fas fa-utensils me-2"></i>See More
                            </a>
                            <button type="button" class="bg-transparent text-primary text-capitalize border-0 pt-2 mx-2">
                                <i class="fa fa-shopping-cart me-2"></i>add to cart
                            </button>
                        </div>
                        <!-- Buttons End -->
                        <?php
                        /*$conn = new mysqli('localhost', 'root', '', 'cafe');
                        $search = isset($_GET['search']);
                        if ($search) {
                            $search_add_items = $_GET['search'];
                            $query = 
                            "SELECT * FROM `add_items`
                            WHERE CONCAT(product_id, product_name, product_img, product_price, product_cetegory)
                            LIKE '%$search_add_items%'
                            ORDER By product_name ASC
                            ";
                        }
                        else {
                            $query = 
                            "SELECT * FROM `add_items`
                            ORDER By product_name ASC
                            ";
                        }
                        
                        $res=mysqli_query($conn, $query);
                        if ($res) {
                            while ($row=mysqli_fetch_assoc($res)) {
                                $product_id = $row['product_id'];
                                $product_name = $row['product_name'];
                                $product_img = $row['product_img'];
                                $product_price = $row['product_price'];
                                echo '<div class="col-lg-6">';
                                echo '<div class="d-flex align-items-center">';
                                if ($product_img != null) {
                                    echo '<img class="flex-shrink-0 img-fluid rounded" src="img/'.$product_img.'" alt="'.$product_name.'" style="width: 80px;">';
                                }
                                else{
                                    echo '<img class="flex-shrink-0 img-fluid rounded" src="img/profile/logo.jpg" alt="img" style="width: 80px;">';
                                }
                                echo '<div class="w-100 d-flex flex-column text-start ps-4">';
                                echo '<h5 class="d-flex justify-content-between border-bottom pb-4">';
                                if ($product_name != null) {
                                    echo '<span class="text-capitalize">'.$product_name.'</span>';
                                }
                                else{
                                    echo 'Un-Known';
                                }
                                echo '<span class="text-secondary"><i class="fa fa-coins"></i> Rs. <strong class="text-primary">'.$product_price.'</strong></span>';
                                echo '</h5>';
                                echo '</div>';
                                echo '</div>';
                                //Buttons Start
                                echo '<div class="d-flex justify-content-end">';
                                //echo '<button type="button" class="bg-transparent text-secondary border-0 btn-sm-square mx-2"><i class="fa fa-store" data-toggle="modal" data-target="#exampleModal"></i></button>';
                                echo '<button type="button" class="bg-transparent text-primary border-0 btn-sm-square mx-2"><i class="fas fa-shopping-cart"></i></button>';
                                echo '</div>';
                                //Buttons End
                                echo '</div>';
                            }
                        }*/
                        ?>
                    </div>
                </div>
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <!-- Buttons Start -->
                        <div class="d-flex justify-content-end">
                            <a href="menu.php" class="bg-transparent text-secondary text-capitalize border-0 pt-2 mx-2">
                                <i class="fas fa-utensils me-2"></i>See More
                            </a>
                            <button type="button" class="bg-transparent text-primary text-capitalize border-0 pt-2 mx-2">
                                <i class="fa fa-shopping-cart me-2"></i>add to cart
                            </button>
                        </div>
                        <!-- Buttons End -->
                        <?php
                        /*$conn = new mysqli('localhost', 'root', '', 'cafe');
                        $search = isset($_GET['search']);
                        if ($search) {
                            $search_add_items = $_GET['search'];
                            $query = 
                            "SELECT * FROM `add_items`
                            WHERE CONCAT(product_id, product_name, product_img, product_price, product_cetegory)
                            LIKE '%$search_add_items%'
                            ORDER By product_name ASC
                            ";
                        }
                        else {
                            $query = 
                            "SELECT * FROM `add_items` WHERE product_cetegory = 'breakfast'
                            ORDER By product_name ASC
                            ";
                        }
                        
                        $res=mysqli_query($conn, $query);
                        if ($res) {
                            while ($row=mysqli_fetch_assoc($res)) {
                                $product_id = $row['product_id'];
                                $product_name = $row['product_name'];
                                $product_img = $row['product_img'];
                                $product_price = $row['product_price'];
                                echo '<div class="col-lg-6">';
                                echo '<div class="d-flex align-items-center">';
                                if ($product_img != null) {
                                    echo '<img class="flex-shrink-0 img-fluid rounded" src="img/'.$product_img.'" alt="'.$product_name.'" style="width: 80px;">';
                                }
                                else{
                                    echo '<img class="flex-shrink-0 img-fluid rounded" src="img/profile/logo.jpg" alt="img" style="width: 80px;">';
                                }
                                echo '<div class="w-100 d-flex flex-column text-start ps-4">';
                                echo '<h5 class="d-flex justify-content-between border-bottom pb-4">';
                                if ($product_name != null) {
                                    echo '<span class="text-capitalize">'.$product_name.'</span>';
                                }
                                else{
                                    echo 'Un-Known';
                                }
                                echo '<span class="text-secondary"><i class="fa fa-coins"></i> Rs. <strong class="text-primary">'.$product_price.'</strong></span>';
                                echo '</h5>';
                                echo '</div>';
                                echo '</div>';
                                //Buttons Start
                                echo '<div class="d-flex justify-content-end">';
                                //echo '<button type="button" class="bg-transparent text-secondary border-0 btn-sm-square mx-2"><i class="fa fa-store" data-toggle="modal" data-target="#exampleModal"></i></button>';
                                echo '<button type="button" class="bg-transparent text-primary border-0 btn-sm-square mx-2"><i class="fas fa-shopping-cart"></i></button>';
                                echo '</div>';
                                //Buttons End
                                echo '</div>';
                            }
                        }*/
                        ?>
                    </div>
                </div>
                <div id="tab-2" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <!-- Buttons Start -->
                        <div class="d-flex justify-content-end">
                            <a href="menu.php" class="bg-transparent text-secondary text-capitalize border-0 pt-2 mx-2">
                                <i class="fas fa-utensils me-2"></i>See More
                            </a>
                            <button type="button" class="bg-transparent text-primary text-capitalize border-0 pt-2 mx-2">
                                <i class="fa fa-shopping-cart me-2"></i>add to cart
                            </button>
                        </div>
                        <!-- Buttons End -->
                        <?php
                        /*$conn = new mysqli('localhost', 'root', '', 'cafe');
                            $search = isset($_GET['search']);
                            if ($search) {
                            $search_add_items = $_GET['search'];
                            $query = 
                            "SELECT * FROM `add_items`
                            WHERE CONCAT(product_id, product_name, product_img, product_price, product_cetegory)
                            LIKE '%$search_add_items%'
                            ORDER By product_name ASC
                            ";
                        }
                        else {
                            $query = 
                            "SELECT * FROM `add_items` WHERE product_cetegory = 'lunch'
                            ORDER By product_name ASC
                            ";
                        }
                        
                        $res=mysqli_query($conn, $query);
                        if ($res) {
                            while ($row=mysqli_fetch_assoc($res)) {
                                $product_id = $row['product_id'];
                                $product_name = $row['product_name'];
                                $product_img = $row['product_img'];
                                $product_price = $row['product_price'];
                                echo '<div class="col-lg-6">';
                                echo '<div class="d-flex align-items-center">';
                                if ($product_img != null) {
                                    echo '<img class="flex-shrink-0 img-fluid rounded" src="img/'.$product_img.'" alt="'.$product_name.'" style="width: 80px;">';
                                }
                                else{
                                    echo '<img class="flex-shrink-0 img-fluid rounded" src="img/profile/logo.jpg" alt="img" style="width: 80px;">';
                                }
                                echo '<div class="w-100 d-flex flex-column text-start ps-4">';
                                echo '<h5 class="d-flex justify-content-between border-bottom pb-4">';
                                if ($product_name != null) {
                                    echo '<span class="text-capitalize">'.$product_name.'</span>';
                                }
                                else{
                                    echo 'Un-Known';
                                }
                                echo '<span class="text-secondary"><i class="fa fa-coins"></i> Rs. <strong class="text-primary">'.$product_price.'</strong></span>';
                                echo '</h5>';
                                echo '</div>';
                                echo '</div>';
                                //Buttons Start
                                echo '<div class="d-flex justify-content-end">';
                                //echo '<button type="button" class="bg-transparent text-secondary border-0 btn-sm-square mx-2"><i class="fa fa-store" data-toggle="modal" data-target="#exampleModal"></i></button>';
                                echo '<button type="button" class="bg-transparent text-primary border-0 btn-sm-square mx-2"><i class="fas fa-shopping-cart"></i></button>';
                                echo '</div>';
                                //Buttons End
                                echo '</div>';
                            }
                        }*/
                        ?>
                    </div>
                </div>
                <div id="tab-3" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <!-- Buttons Start -->
                        <div class="d-flex justify-content-end">
                            <a href="menu.php" class="bg-transparent text-secondary text-capitalize border-0 pt-2 mx-2">
                                <i class="fas fa-utensils me-2"></i>See More
                            </a>
                            <button type="button" class="bg-transparent text-primary text-capitalize border-0 pt-2 mx-2">
                                <i class="fa fa-shopping-cart me-2"></i>add to cart
                            </button>
                        </div>
                        <!-- Buttons End -->
                        <?php
                        /*$conn = new mysqli('localhost', 'root', '', 'cafe');
                            $search = isset($_GET['search']);
                            if ($search) {
                            $search_add_items = $_GET['search'];
                            $query = 
                            "SELECT * FROM `add_items`
                            WHERE CONCAT(product_id, product_name, product_img, product_price, product_cetegory)
                            LIKE '%$search_add_items%'
                            ORDER By product_name ASC
                            ";
                        }
                        else {
                            $query = 
                            "SELECT * FROM `add_items` WHERE product_cetegory = 'dinner'
                            ORDER By product_name ASC
                            ";
                        }
                        
                        $res=mysqli_query($conn, $query);
                        if ($res) {
                            while ($row=mysqli_fetch_assoc($res)) {
                                $product_id = $row['product_id'];
                                $product_name = $row['product_name'];
                                $product_img = $row['product_img'];
                                $product_price = $row['product_price'];
                                echo '<div class="col-lg-6">';
                                echo '<div class="d-flex align-items-center">';
                                if ($product_img != null) {
                                    echo '<img class="flex-shrink-0 img-fluid rounded" src="img/'.$product_img.'" alt="'.$product_name.'" style="width: 80px;">';
                                }
                                else{
                                    echo '<img class="flex-shrink-0 img-fluid rounded" src="img/profile/logo.jpg" alt="img" style="width: 80px;">';
                                }
                                echo '<div class="w-100 d-flex flex-column text-start ps-4">';
                                echo '<h5 class="d-flex justify-content-between border-bottom pb-4">';
                                if ($product_name != null) {
                                    echo '<span class="text-capitalize">'.$product_name.'</span>';
                                }
                                else{
                                    echo 'Un-Known';
                                }
                                echo '<span class="text-secondary"><i class="fa fa-coins"></i> Rs. <strong class="text-primary">'.$product_price.'</strong></span>';
                                echo '</h5>';
                                echo '</div>';
                                echo '</div>';
                                //Buttons Start
                                echo '<div class="d-flex justify-content-end">';
                                //echo '<button type="button" class="bg-transparent text-secondary border-0 btn-sm-square mx-2"><i class="fa fa-store" data-toggle="modal" data-target="#exampleModal"></i></button>';
                                echo '<button type="button" class="bg-transparent text-primary border-0 btn-sm-square mx-2"><i class="fas fa-shopping-cart"></i></button>';
                                echo '</div>';
                                //Buttons End
                                echo '</div>';
                            }
                        }*/
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Menu End -->