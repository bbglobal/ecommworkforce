<?php
function head($title)
{
    echo '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/script.js" defer></script>
    <title>EcommWorkForce - ' . $title . '</title>
</head> 

<body>
    <header>
    <div class="stjr-review-tab"></div>
        <nav class="container" id="mynav">
            <ul class="d-flex justify-content-around align-items-center">
                <li class="nav-item">
                    <a href="index.php">
                        <img src="img/Ecommworkforce-logo.png" alt="Logo">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php">Home</a>
                </li>
                <li class="nav-item" id="services">
                    <a href="services.php">Services</a>
                    <i class="fa fa-caret-down"></i>
                    <div class="dropdown">
                        <a href="services.php#account-management">Account Management</a>
                        <a href="services.php#marketing-management">Marketing Management</a>
                        <a href="services.php#brand-management">Brand Management</a>
                        <a href="services.php#audit-analysis">Audit and Analysis</a>
                        <a href="services.php#designer">Designer</a>
                    </div>
                </li>
                <li class="nav-item" id="help">
                    <a href="help.php">How we help you?</a>
                    <i class="fa fa-caret-down"></i>
                    <div class="dropdown">
                        <a href="help.php#automation">Automation</a>
                        <a href="help.php#efficiency">Efficiency</a>
                        <a href="help.php#control">Full Control</a>
                    </div>
                </li>
                <li class="nav-item" id="price">
                    <a href="pricing.php">Pricing</a>
                    <i class="fa fa-caret-down"></i>
                    <div class="dropdown">
                        <a href="pricing.php">Standard</a>
                        <a href="pricing.php">Customize Offer</a>
                    </div>
                </li>
                <li class="nav-item" id="more">
                    <a href="#">More</a>
                    <i class="fa fa-caret-down"></i>
                    <div class="dropdown">
                        <a href="blog.php">Learning Center</a>
                        <a href="testimonials.php">Customer Stories</a>
                        <a href="reviews.php">Reviews</a>
                        <a href="careers.php">Careers</a>
                        <a href="demo.php">Book a Demo</a>
                        <a href="contactUs.php">Contact Us</a>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- mobile menu -->
        <nav class="menu-extras">
            <input type="checkbox" id="check">
            <ul class="d-flex align-items-center justify-content-between py-3" id="my-nav">
                <li>
                    <a href="index.php"> <img src="img/Ecommworkforce-logo.png" alt="logo" width="100px"> </a>
                </li>
                <li>
                    <label for="check">
                        <a class="mx-3" style="cursor: pointer;">
                            <i class="fa fa-bars" id="hamberger"></i>
                        </a>
                    </label>
                </li>
            </ul>
            <ul id="menu-extra">
                <li class="py-3">
                    <a href="/">Home</a>
                    <hr>
                </li>
                <li class="py-3" id="service">
                    <a href="#">Services</a>
                    <i class="fa fa-caret-down"></i>
                    <hr>
                </li>
                <div id="menu-drop">
                    <li>
                        <a href="services.php#account-management">Account Management</a>
                        <hr>
                    </li>
                    <li>
                        <a href="services.php#market-management">Market Management</a>
                        <hr>
                    </li>
                    <li>
                        <a href="services.php#brand-management">Brand Management</a>
                        <hr>
                    </li>
                    <li>
                        <a href="services.php#audit-analysis">Audit and Analysis</a>
                        <hr>
                    </li>
                    <li>
                        <a href="services.php#designer">Designer</a>
                        <hr>
                    </li>
                </div>
                <li class="py-3" id="we-help">
                    <a href="#">How we help you?</a>
                    <i class="fa fa-caret-down"></i>
                    <hr>
                </li>
                <div id="help-menu">
                    <li>
                        <a href="help.php#automation">Automationt</a>
                        <hr>
                    </li>
                    <li>
                        <a href="help.php#efficiency">Efficiency</a>
                        <hr>
                    </li>
                    <li>
                        <a href="help.php#control">Full Control</a>
                        <hr>
                    </li>
                </div>
                <li class="py-3" id="priceMenu">
                    <a href="pricing.php">Pricing</a>
                    <i class="fa fa-caret-down"></i>
                    <hr>
                </li>
                <div id="price-menu">
                    <li>
                        <a href="pricing.php">Standard</a>
                        <hr>
                    </li>
                    <li>
                        <a href="pricing.php">Customize Offer</a>
                        <hr>
                    </li>
                </div>
                <li class="py-3" id="moreMenu">
                    <a href="#">More</a>
                    <i class="fa fa-caret-down"></i>
                </li> 
                <div id="more-drop">
                <li>
                    <a href="blog.php">Learning Center</a>
                    <hr>
                </li>
                <li>
                    <a href="testimonials.php">Customer Stories</a>
                    <hr>
                </li>
                <li>
                    <a href="reviews.ph">Reviews</a>
                    <hr>
                </li>
                <li>
                    <a href="careers.php">Careers</a>
                    <hr>
                </li>
                <li>
                    <a href="demo.php">Book a Demo</a>
                    <hr>
                </li>
                <li>
                    <a href="contactUs.php">Contact Us</a>
                    <hr>
                </li>
            </div>
            </ul>
        </nav>
    </header>';
}
