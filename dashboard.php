<?php 
   
   @include_once("header.php");
   $_SESSION['page-title-content-box'] = 'Dashboard';
   $_SESSION['page-title-bread-crumb'] = "<li>User Dashboard</li>";
   @include_once('components/page-title.php');

?>
 <section class="policy-section bg-color-1 pt-2 mb-4" style="z-index:9999;">
        <div class="auto-container">
            <div class="col-xl-12 col-lg-12 col-md-12 inner-column">
                <div id="content_block_six">
                    <div class="content-box">
                        <div class="tabs-box">
                            <div class="tab-btn-box">
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li class="tab-btn active-btn  text-dark" data-tab="#tab-profile"> <i class="fas fa-user"></i> Profile</li>

                                    <li class="tab-btn text-dark" data-tab="#tab-nibbs-checker"><i class="fas fa-eye"></i> NIBSS Transaction Checker</li>
                                </ul>
                            </div>
                            <div class="tabs-content">
                                <div class="tab active-tab" id="tab-profile">
                                    <p class="text-dark"><?php echo $auth_user['name']?? "Full Name" ?></p>
                                </div>
                                <div class="tab " id="tab-nibbs-checker">
                                    <div class="content-inner">
                                        <p class="text-dark">Leveraging NIBSS to validate lagging transactions at a click or call us on <a href="tel:2347017518376" >2347017518376</a></p>
                                        <?php @include_once('forms/transaction-query-form.php')  ;   ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
@include_once("footer.php");
?>
    