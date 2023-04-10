<?php 
    include_once("header.php");

    $bvn = $_POST['BVN'] ?? '12345678910';
    $bank = $_POST['bank'] ?? 'Bank MyEverydeal';
    $trnx_no = $_POST['transaction_number']?? '2304090605845623564';
    
?>
    <section class="about-style-four bg-color-1">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div id="content_block_13">
                        <div class="content-box">
                            <div class="sec-title style-four right">
                                <h5>DealRadical</h5>
                                <h4>Transaction number. : <?php echo $trnx_no; ?> </h4>
                                <hr>
                            </div>
                            <div class="text p-0 m-0">
                                <div class="text-center ">
                                    <h5>Bank Deposit</h5>
                                </div>

                                <label class="text-dark pr-4">Status </label>  <span class="text-warning">Pending</span> <br/>
                                  <label class="text-dark pr-4">Sender </label>  <span class=""><b>UCHE ABIODUN MUSA</b></span> <br/>
                                  <label class="text-dark pr-4">Bank Name </label>  <span class=""><b><?php echo $bank; ?></b></span> <br/>
                                  <label class="text-dark pr-4">Bank Account </label>  <span class=""><b>2453647865</b></span> <br/>
                                  <label class="text-dark pr-4">Message </label>  <span class="">Transfer from <b>UCHE ABIODUN MUSA</b> to <b>ANDREW ISIAKA</b></span> <br/>
                            </div>
                            <p>The transaction is still in progress</p>
                            <div class="progress" style="height: 2px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                                
                                <div class="progress-bar progress-bar-striped bg-primary " style="width:20%">
                                    sent
                                </div>
                                <div class="progress-bar progress-bar-striped bg-white text-muted" style="width:20%">
                                    received
                                </div>
                                <div class="progress-bar progress-bar-striped bg-white text-muted" style="width:20%">
                                    confirmed
                                </div>
                                <div class="progress-bar progress-bar-striped bg-white text-muted" style="width:40%">
                                    success
                                </div>
                            </div>

                            
                            <div class="mt-2 button-group">
                                <a href="transaction-query.php" class="theme-btn style-one">Back</a>
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
