<?php 
    @include_once("header.php");
    $_SESSION['page-title-content-box'] = 'Query transaction';
    $_SESSION['page-title-bread-crumb'] = "<li>NIBSS CHECKER</li>";
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
                                    <li class="tab-btn active-btn text-dark" data-tab="#tab-4">One off user</li>
                                    <li class="tab-btn text-dark" data-tab="#tab-5">Members Login</li>
                                </ul>
                            </div>
                            <div class="tabs-content">
                                <div class="tab active-tab" id="tab-4">
                                    <div class="content-inner">
                                        <p class="text-dark">Leveraging NIBSS to validate lagging transactions at a click or call us on <a href="tel:2347017518376" >2347017518376</a></p>
                                        <form action="transaction-check-out.php" method="post">
                                            <?php @include_once('forms/transaction-query-form.php')  ;   ?>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab" id="tab-5">
                                    <p class="text-dark">Gain member's full access to NIBSS transaction tracking and validation</p>
                                    <form action="auth/login.php" method="post" >
                                        <?php @include_once('forms/login-form.php')  ;   ?>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
  

<?php 
    include_once("footer.php");
?>