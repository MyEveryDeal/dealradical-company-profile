<?php 
    @include_once("header.php");
    $_SESSION['page-title-content-box'] = 'Our Projects';
    $_SESSION['page-title-bread-crumb'] = "<li>Projects</li>";
    @include_once('components/page-title.php');
?>

    <!-- project-section -->
    <section class="project-section">
        <div class="fluid-container">
            <div class="project-carousel theme-carousel owl-theme owl-carousel owl-dots-none owl-nav-none">
                <div class="project-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-1.jpg" alt=""></figure>
                        <div class="lower-content">
                            <p>Online Shopping</p>
                            <h2><a href="http://myeverydeal.com">MyEveryDeal</a></h2>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-2.jpg" alt=""></figure>
                        <div class="lower-content">
                            <p>Financial Initiatives</p>
                            <h2><a href="index.html">Planning & Task Completion</a></h2>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-3.jpg" alt=""></figure>
                        <div class="lower-content">
                            <p>Corporate Management</p>
                            <h2><a href="index.html">Private Workshop Assistant</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- project-section end -->
<?php 
    include_once("footer.php");
?>