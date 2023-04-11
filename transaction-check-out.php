<?php 
    @include_once("header.php");
    $_SESSION['page-title-content-box'] = 'Query transaction';
    $_SESSION['page-title-bread-crumb'] = "<li><a href='transaction-query.php'>NIBSS CHECKER</a></li> <li>Checkout</li>";
    @include_once('components/page-title.php');
?>
    <!-- Charges from associated debit card or fund in the platform or eNaira wallet or direct payment from the eNaira wallet, card or airtime -->
    <section class="policy-section bg-color-1 pt-2 mb-4" style="z-index:9999;">
        <div class="auto-container">
            <div class="col-md-12 inner-column">
                <div id="content_block_six">
                    <div class="content-box">
                        <div class="tabs-box">
                            <div class="tab-btn-box">
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li class="tab-btn active-btn text-dark" data-tab="#tab-4">DealRadical - NIBSS Checkout</li>
                                </ul>
                            </div>
                            <div class="tabs-content">
                                <div class="tab active-tab" id="tab-4">
                                    <div class="content-inner row">
                                        <div class="col-md-6">
                                            <div class="order-md-2 mb-4">
                                                <h4 class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="">Transaction Order</span>
                                                </h4>
                                                <ul class="list-group mb-3">
                                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                        <div>
                                                            <h6 class="my-0">Transaction Number</h6>
                                                            <small class="text-muted">Brief description</small>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                        <div>
                                                            <h6 class="my-0">Sender Info</h6>
                                                            <small class="text-muted">Brief description</small>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                        <div>
                                                            <h6 class="my-0">Reciever Info</h6>
                                                            <small class="text-muted">Brief description</small>
                                                        </div>
                                                    </li>
                                                   
                                                    <li class="list-group-item d-flex justify-content-between">
                                                        <span>Fee (#)</span>
                                                        <strong>$20</strong>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-block my-3">
                                                <h4 class="text-muted">Payment</h4>
                                                <hr class="">
                                                <div class="d-md-flex justify-content-between">
                                                    <div class="custom-control custom-radio m-2">
                                                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                                                        <label class="custom-control-label" for="credit">Debit Card</label>
                                                    </div>
                                                    <div class="custom-control custom-radio m-2">
                                                        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                                        <label class="custom-control-label" for="debit">eNaira Wallet</label>
                                                    </div>
                                                    <div class="custom-control  custom-radio m-2">
                                                        <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                                        <label class="custom-control-label" for="paypal">Airtime</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="tab-content" id="v-pills-tabContent">
                                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                        <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <label for="cc-name">Name on card</label>
                                                                <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                                                                <small class="text-muted">Full name as displayed on card</small>
                                                                <div class="invalid-feedback">
                                                                Name on card is required
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="cc-number">Credit card number</label>
                                                                <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                                                                <div class="invalid-feedback">
                                                                Credit card number is required
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="cc-expiration">Expiration</label>
                                                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                                                                <div class="invalid-feedback">
                                                                Expiration date required
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="cc-expiration">CVV</label>
                                                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                                                                <div class="invalid-feedback">
                                                                Security code required
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                                                </div>
                                                <div class="form-group message-btn">
                                                    <button type="submit" onclick="submit()" class="theme-btn style-one w-full">Submit</button>
                                                </div>
                                            </div>
                                        </div>
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
    include_once("footer.php");
?>