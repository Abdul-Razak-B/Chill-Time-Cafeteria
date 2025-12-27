<?php
$navbar = array(
    "Home" => "index.php",
    "About" => "about.php",
    "Service" => "service.php",
    "Menu" => "menu.php",
    "Our Team" => "team.php",
    "Comment" => "comment.php",
    "Contact" => "contact.php",
    "Member" => "member.php",
    "View Dish" => "view_dish.php",
    "Logout" => "logout.php",
    "Admin" => "admin.php",
    "Login" => "login.php",
    "Register" => "register.php",
    "Admin Login" => "ad_login.php",
    "Admin Register" => "ad_register.php",
);
//Url Fetching
//$url_length = strrpos($_SERVER['SCRIPT_NAME'], "/");
//$url_slash = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/"));
$url_fetch = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1);

//Navbar Active
$active_home = $url_fetch == "index.php"? 'active':'';
$active_about = $url_fetch == "about.php"? 'active':'';
$active_service = $url_fetch == "service.php"? 'active':'';
$active_menu = $url_fetch == "menu.php"? 'active':'';
$active_team = $url_fetch == "team.php"? 'active':'';
$active_comment = $url_fetch == "comment.php"? 'active':'';
$active_contact = $url_fetch == "contact.php"? 'active':'';
$active_member = $url_fetch == "member.php"? 'active':'';
$active_login = $url_fetch == "login.php"? 'active':'';
$active_register = $url_fetch == "register.php"? 'active':'';

// Index Navbar & Hero Start
if (
    $url_fetch == $navbar['About'] || $url_fetch == $navbar['Service'] || $url_fetch == $navbar['Menu'] ||
    $url_fetch == $navbar['Comment'] || $url_fetch == $navbar['Contact'] || $url_fetch == $navbar['Our Team'] ||
    $url_fetch == $navbar['Login'] || $url_fetch == $navbar['Register'] || $url_fetch == $navbar['Member'] ||
    $url_fetch == $navbar['Home'] || $url_fetch == $navbar['View Dish'] || $url_fetch == $navbar['Login'] ||
    $url_fetch == $navbar['Register'] || $url_fetch == $navbar['Logout']
) {
    echo '<div class="container-xxl position-relative p-0 ">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0 ">
            <a href=" " class="navbar-brand p-0 ">
                <h1 class="text-primary m-0 ">
                    <i class="fa fa-utensils me-3 "></i>Chill Time Cafeteria
                </h1>
            </a>
            <button class="navbar-toggler " type="button " data-bs-toggle="collapse " data-bs-target="#navbarCollapse ">
                <span class="fa fa-bars "></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarCollapse ">
            ';
            echo '
                <div class="navbar-nav ms-auto py-0 pe-4 align-items-middle">
                    <a href="'.$navbar['Home'].'" class="nav-item nav-link text-uppercase '.$active_home.'">Home</a>
                    <a href="'.$navbar['About'].'" class="nav-item nav-link text-uppercase '.$active_about.'">About</a>
                    <a href="'.$navbar['Service'].'" class="nav-item nav-link text-uppercase '.$active_service.'">Service</a>
                    <a href="'.$navbar['Menu'].'" class="nav-item nav-link text-uppercase '.$active_menu.'">Menu</a>
                    <div class="nav-item dropdown ">
                        <a href="# " class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0 ">
                            <a href="'.$navbar['Our Team'].'" class="dropdown-item text-capitalize text-center '.$active_team.'">Our Team</a>
                            <a href="'.$navbar['Comment'].'" class="dropdown-item text-capitalize text-center '.$active_comment.'">Comments</a>
                        </div>
                    </div>
                    <a href="'.$navbar['Contact'].'" class="nav-item nav-link text-uppercase'.$active_contact.'">Contact</a>';
                    /*echo '<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><span class="mx-2">Authentication</span></a>
                        <div class="dropdown-menu m-0 ">';
                            foreach
                            (
                                $navbar as $items => $item
                            )
                            {
                                if (
                                    $items == 'Login'
                                ) {
                                    echo '
                                    <a href="'.$item.'" class="dropdown-item text-capitalize">'.$items.'</a>';
                                }
                                if(isset($_SESSION['login'])){
                                    if(
                                        $items == 'Logout'
                                    ){
                                        echo '
                                        <a href="'.$item.'" class="dropdown-item text-capitalize">'.$items.'</a>';
                                    }
                                }
                            }
                            echo '
                            </div>
                            </div>
                            </div>';*/
                    /*if (
                        $items == 'Admin Login'
                    ) {
                        echo '
                        <a href="Admin Site/'.$item.'" class="dropdown-item text-capitalize">'.$items.'</a>';
                    }*/
                echo '
            </div>
        </nav>
    </div>';
}
//Index Navbar & Hero End
if ($url_fetch == "index.php") {
    echo '
    <div class="container-xxl py-5 bg-dark hero-header mb-5 ">
        <div class="container my-5 py-5 ">
            <div class="row align-items-center g-5 ">
                <div class="col-lg-6 text-center text-lg-start ">
                    <h1 class="display-3 text-white animated slideInLeft ">Enjoy Our<br>Delicious Meal</h1>
                    <p class="text-white animated slideInLeft mb-4 pb-2 ">A place to gather, relax and enjoy · Where the atmosphere is just as good as the food</p>
                </div>
                <div class="col-lg-6 text-center text-lg-end overflow-hidden ">
                    <img class="img-fluid " src="img/hero.png">
                </div>
            </div>
        </div>
    </div>
    ';
}
if (
    $url_fetch == $navbar['About'] || $url_fetch == $navbar['Service'] || $url_fetch == $navbar['Menu'] ||
    $url_fetch == $navbar['Comment'] || $url_fetch == $navbar['Contact'] || $url_fetch == $navbar['Our Team'] ||
    $url_fetch == $navbar['Login'] || $url_fetch == $navbar['Register'] || $url_fetch == $navbar['Member'] ||
    $url_fetch == $navbar['View Dish']
) {
    echo '
    <div class="container-xxl position-relative p-0">
        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container text-center my-5 pt-5 pb-4">
            ';
                if ($url_fetch == $navbar['About']) {
                    echo '
                    <h1 class="display-3 text-white mb-3 animated slideInDown">About Cafeteria</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-capitalize">
                            <li class="breadcrumb-item"><a href="'.$navbar['Home'].'">Home</a></li>
                            <li class="breadcrumb-item"><a href="//xampp/htdocs/!!!/Cafeteria/Pages/">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                        </ol>
                    </nav>
                ';
                }
                if ($url_fetch == $navbar['Service']) {
                    echo '
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Our Services</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center text-capitalize">
                                <li class="breadcrumb-item"><a href="'.$navbar['Home'].'">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
                            </ol>
                        </nav>
                    ';
                }
                if ($url_fetch == $navbar['Menu']) {
                    echo '
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Food Menu</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center text-capitalize">
                                <li class="breadcrumb-item"><a href="'.$navbar['Home'].'">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                            </ol>
                        </nav>
                    ';
                }
                if ($url_fetch == $navbar['Our Team']) {
                    echo '
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Our Team</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center text-capitalize">
                                <li class="breadcrumb-item"><a href="'.$navbar['Home'].'">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Our team</li>
                            </ol>
                        </nav>
                    ';
                }
                if ($url_fetch == $navbar['Comment']) {
                    echo '
                        <h1 class="display-3 text-white mb-3 animated slideInDown">View Comments</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center text-capitalize">
                                <li class="breadcrumb-item"><a href="'.$navbar['Home'].'">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Comment</li>
                            </ol>
                        </nav>
                    ';
                }
                if ($url_fetch == $navbar['Contact']) {
                    echo '
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center text-capitalize">
                                <li class="breadcrumb-item"><a href="'.$navbar['Home'].'">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    ';
                }
                if ($url_fetch == $navbar['View Dish']) {
                    echo '<h1 class="display-3 text-white mb-3 animated slideInDown">Add To Cart</h1>';
                }
                if ($url_fetch == $navbar['Login']) {
                    echo '
                        <h1 class="display-3 text-white text-capitalize mb-3 animated slideInDown">Login to continue</h1>
                    ';
                }
                if ($url_fetch == $navbar['Register']) {
                    echo '
                        <h1 class="display-3 text-white text-capitalize mb-3 animated slideInDown">Register Yourself</h1>
                    ';
                }
                echo '
            </div>
        </div>
    </div> 
    ';
}
?>
