<?php 
    include_once("header.php");
?>
 <section class="page-title centred" style="background-image: url(assets/images/background/page-title-4.jpg);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Query transaction</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Check transaction validity</a></li>
                </ul>
            </div>
        </div>
    </section>
   
    <section class="policy-section bg-color-1 pt-2 mb-4" style="z-index:9999;">
        <div class="auto-container">
            <div class="col-xl-12 col-lg-12 col-md-12 inner-column">
                <div id="content_block_six">
                    <div class="content-box">
                        <div class="tabs-box">
                            <div class="tab-btn-box">
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li class="tab-btn active-btn text-dark" data-tab="#tab-4">Check your transaction</li>
                                </ul>
                            </div>
                            <div class="tabs-content">
                                <div class="tab active-tab" id="tab-4">
                                    <div class="content-inner">
                                        <p class="text-dark">Leveraging NIBSS to validate lagging transactions at a click. Call us <a href="tel:2347017518376" class="text-muted">2347017518376</a></p>
                                        <form action="transaction-result.php" method="post">
                                            <div class="form-group">
                                                <i class="fas fa-swatchbook"></i>
                                                <input type="text" name="transaction_number" placeholder="Transaction ref. no." required class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <i class="fas fa-id-card"></i>
                                                <input type="text" name="BVN" placeholder="BVN" required="" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <i class="fas fa-piggy-bank"></i>
                                                <div class="select-box">
                                                    <select class="wide" name="bank" required>
                                                        <option  display="First Bank" class="option">Select bank</option>
                                                        <option value="First Bank" display="First Bank" class="option">First Bank</option>
                                                        <option value="UBA" class="option">UBA</option>
                                                        <option value="Opay" class="option">Opay</option>
                                                        <option value="Access Bank" class="option">Access Bank</option>
                                                        <option value="FCMB" class="option">FCMB</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group message-btn">
                                                <button type="submit" onclick="submit()" class="theme-btn style-one w-full">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function submit(){
            alert();
            var ok = confirm();
            console.log(e);
        }
    </script>
  <!--Page Title-->
  

<?php 
    include_once("footer.php");
?>