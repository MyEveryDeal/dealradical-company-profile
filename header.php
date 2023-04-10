<?php 
// when installed via composer
ini_set('display_errors', true);
// require_once __DIR__ .'/vendor/autoload.php';

// // use the factory to create a Faker\Generator instance
// $faker = Faker\Factory::create();

// // 'Vince Sporer'
// echo $faker->email();
// // 'walter.sophia@hotmail.com'
// echo $faker->text();
// // 'Numquam ut mollitia at consequuntur inventore dolorem.'

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.commonsupport.com/Fionca/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Feb 2023 18:16:11 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Home - DealRadicals</title>

    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="../../fonts.googleapis.com/css9233.css?family=Arimo:400,400i,700,700i&amp;display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href="assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/owl.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/color.css" rel="stylesheet">
    <link href="assets/css/rtl.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

</head>
<!-- page wrapper -->
       <!-- page wrapper -->
<body class="boxed_wrapper ltr">

<!-- Preloader -->
<div class="loader-wrap">
    <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
    <div class="layer layer-one"><span class="overlay"></span></div>
    <div class="layer layer-two"><span class="overlay"></span></div>        
    <div class="layer layer-three"><span class="overlay"></span></div>        
</div>


<!-- page-direction -->
<div class="page_direction">
    <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
    <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
</div>
<!-- page-direction end -->


<!-- search-popup -->
<div id="search-popup" class="search-popup">
    <div class="close-search"><span>Close</span></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form method="post" action="https://azim.commonsupport.com/Fionca/index.html">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn style-four">
                    </fieldset>
                </div>
            </form>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="index.html">Finance</a></li>
                <li><a href="index.html">Idea</a></li>
                <li><a href="index.html">Service</a></li>
                <li><a href="index.html">Growth</a></li>
                <li><a href="index.html">Plan</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- search-popup end -->
 <!-- main header -->
 <header class="main-header style-one <?php echo str_ends_with($_SERVER['REQUEST_URI'], 'index.php') ?  '': 'style-six' ; ?> ">
        <div class="header-top">
            <div class="auto-container">
                <div class="top-inner clearfix">
                    <ul class="info top-left pull-left">
                        <li><i class="fas fa-map-marker-alt"></i>19 Mishalia Street, Mando Kaduna, Nigeria</li>
                        <li><i class="fas fa-headphones"></i>Support <a href="tel:01005200369">+2348066190662</a></li>
                    </ul>
                    <div class="top-right pull-right">
                        <ul class="social-links clearfix">
                            <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-lower">
            <div class="auto-container">
                <div class="outer-box clearfix">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="index.php"><img
                                    src="assets/images/logo-myeverydeal.png"
                                    alt=""></a></figure>
                    </div>
                    <div class="menu-area pull-right">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="<?php echo str_ends_with($_SERVER['REQUEST_URI'], 'index.php') ?  'current': '' ; ?> "><a href="index.php">Home</a>
                                        <ul>
                                            <li><a href="index.html">Home Page One</a></li>
                                            <li><a href="index-2.html">Home Page Two</a></li>
                                            <li><a href="index-3.html">Home Page Three</a></li>
                                            <li><a href="index-4.html">Home Page Four</a></li>
                                            <li><a href="index-5.html">Home Page Five</a></li>
                                            <li><a href="index-onepage.html">Home OnePage</a></li>
                                            <li class="dropdown"><a href="index.html">Header Style</a>
                                                <ul>
                                                    <li><a href="index.html">Header Style One</a></li>
                                                    <li><a href="index-2.html">Header Style Two</a></li>
                                                    <li><a href="index-3.html">Header Style Three</a></li>
                                                    <li><a href="index-4.html">Header Style Four</a></li>
                                                    <li><a href="index-5.html">Header Style Five</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown <?php echo str_contains($_SERVER['REQUEST_URI'], 'service-') ?  'current': '' ; ?> ">
                                        <a href="#our-services-section">Services</a>
                                        <ul>
                                            <li class="<?php echo str_ends_with($_SERVER['REQUEST_URI'], 'service-myeverydeal.php') ?  'current': '' ; ?> " ><a href="service-myeverydeal.php">MyEveryDeal</a></li>
                                            <li class="<?php echo str_ends_with($_SERVER['REQUEST_URI'], 'service-zigaya.php') ?  'current': '' ; ?> "><a href="service-zigaya.php">Zigaya</a></li>
                                            <li class="<?php echo str_ends_with($_SERVER['REQUEST_URI'], 'service-supbuyers.php') ?  'current': '' ; ?> "><a href="service-supbuyers.php">Supbuyers</a></li>
                                        </ul>
                                    </li>
                                    <li class="<?php echo str_ends_with($_SERVER['REQUEST_URI'], 'projects.php') ?  'current': '' ; ?>"><a href="projects.php">Projects</a></li>
                                    <li class="<?php echo str_ends_with($_SERVER['REQUEST_URI'], 'about.php') ?  'current': '' ; ?>"><a href="about.php">About</a></li>
                                    

                                    <!-- <li class="dropdown"><a href="index.html">Elements</a>
                                        <div class="megamenu">
                                            <div class="row clearfix">
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li>
                                                            <h4>Elements 1</h4>
                                                        </li>
                                                        <li><a href="feature-element-1.html">Feature 01</a></li>
                                                        <li><a href="feature-element-2.html">Feature 02</a></li>
                                                        <li><a href="feature-element-3.html">Feature 03</a></li>
                                                        <li><a href="about-element-1.html">About 01</a></li>
                                                        <li><a href="about-element-2.html">About 02</a></li>
                                                        <li><a href="about-element-3.html">About 03</a></li>
                                                        <li><a href="about-element-4.html">About 04</a></li>
                                                        <li><a href="stats-element.html">Stats Element</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li>
                                                            <h4>Elements 2</h4>
                                                        </li>
                                                        <li><a href="news-element-1.html">News 01</a></li>
                                                        <li><a href="news-element-2.html">News 02</a></li>
                                                        <li><a href="funfact-element-1.html">Fun Fact 01</a></li>
                                                        <li><a href="funfact-element-2.html">Fun Fact 02</a></li>
                                                        <li><a href="service-element-1.html">Service 01</a></li>
                                                        <li><a href="service-element-2.html">Service 02</a></li>
                                                        <li><a href="skills-element.html">Skills Element</a></li>
                                                        <li><a href="clients-element.html">Clients</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li>
                                                            <h4>Elements 3</h4>
                                                        </li>
                                                        <li><a href="team-element-1.html">Team 01</a></li>
                                                        <li><a href="team-element-2.html">Team 02</a></li>
                                                        <li><a href="pricing-element.html">Pricing</a></li>
                                                        <li><a href="testimonial-element-1.html">Testimonial 01</a></li>
                                                        <li><a href="testimonial-element-2.html">Testimonial 02</a></li>
                                                        <li><a href="testimonial-element-3.html">Testimonial 03</a></li>
                                                        <li><a href="work-element-1.html">Working 01</a></li>
                                                        <li><a href="work-element-2.html">Working 02</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li>
                                                            <h4>Elements 4</h4>
                                                        </li>
                                                        <li><a href="project-element-1.html">Project 01</a></li>
                                                        <li><a href="project-element-2.html">Project 02</a></li>
                                                        <li><a href="chart-element.html">Chart Element</a></li>
                                                        <li><a href="footer-element-1.html">Footer 01</a></li>
                                                        <li><a href="footer-element-2.html">Footer 02</a></li>
                                                        <li><a href="footer-element-3.html">Footer 03</a></li>
                                                        <li><a href="footer-element-4.html">Footer 04</a></li>
                                                        <li><a href="footer-element-5.html">Footer 05</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li> -->
                                    <li class="<?php echo str_contains($_SERVER['REQUEST_URI'], 'contact.php') ?  'current': '' ; ?> "><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                        <div class="menu-right-content clearfix">
                            <div class="search-btn">
                                <button type="button" class="search-toggler"><i class="flaticon-search-1"></i></button>
                            </div>
                            <div class="nav-btn nav-toggler navSidebar-button clearfix">
                                <i class="fas fa-align-right"></i>
                            </div>
                            <div class="btn-box">
                                <a href="transaction-query.php" class="theme-btn style-one">NIBSS CHECKER</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo"><a href="index.html"><img
                                src="assets/images/logo-myeverydeal.png"
                                alt=""></a>
                    </figure>
                </div>
                <div class="menu-area pull-right">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
    <!-- main-header end -->
    
    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="assets/images/mobile-logo.png" alt="" title=""></a>
            </div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Chicago 12, Melborne City, USA</li>
                    <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->