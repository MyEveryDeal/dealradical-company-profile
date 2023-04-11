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
                                    <li class="tab-btn active-btn text-dark" data-tab="#tab-4">One Time User</li>
                                    <li class="tab-btn text-dark" data-tab="#tab-5">Members Login</li>
                                </ul>
                            </div>
                            <div class="tabs-content">
                                <div class="tab active-tab" id="tab-4">
                                    <div class="content-inner">
                                        <p class="text-dark">Leveraging NIBSS to validate lagging transactions at a click or call us on <a href="tel:2347017518376" >2347017518376</a></p>
                                        <form action="transaction-result.php" method="post">
                                            <div class="row">
                                            <div class="col-md-6 mb-3">
                                                    <label for="transaction_date">Transaction date</label>
                                                    <div class="input-group  ">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                <i class="fas fa-calendar"></i>
                                                            </span>
                                                        </div>
                                                        <input type="date" name="transaction_date" placeholder="Transaction date" required class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="transaction_number">Transaction number</label>
                                                    <div class="input-group  ">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                <i class="fas fa-swatchbook"></i>
                                                            </span>
                                                        </div>
                                                        <input type="number" name="transaction_number" placeholder="Trnx no." required class="form-control">
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="row">
                                                
                                                <div class="col-12 mb-3">
                                                    <label for="amount">Amount (#)</label>
                                                    <div class="input-group  ">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                <i class="fas fa-money-bill-alt"></i>
                                                            </span>
                                                        </div>
                                                        <input type="number" step="0.01" name="amount" placeholder="0.00" required class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="sender_account_number">Sender Bank</label>
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
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="sender_account_number">Sender Account Number</label>
                                                        <div class="input-group  ">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">
                                                                    <i class="fas fa-credit-card"></i>
                                                                </span>
                                                            </div>
                                                            <input type="number" name="sender_account_number" placeholder="account number" required class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6">

                                                    <div class="mb-3">
                                                        <label for="sender_account_number">Receiver Bank</label>
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
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="receiver_account_number">Receiver Account Number</label>
                                                        <div class="input-group  ">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">
                                                                    <i class="fas fa-credit-card"></i>
                                                                </span>
                                                            </div>
                                                            <input type="number" name="receiver_account_number" placeholder="account number" required class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            
                                            <div class="form-group message-btn">
                                                <button type="submit" onclick="submit()" class="theme-btn style-one w-full">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab" id="tab-5">
                                    <p class="text-dark">Gain member's full access to NIBSS transaction tracking and validation</p>
                                   
                                    <form action="transaction-result.php" method="post">
                                            <div class="row">
                                            <div class="col-md-12 mb-3">
                                                    <label for="email">Email</label>
                                                    <div class="input-group  ">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                <i class="fas fa-envelope"></i>
                                                            </span>
                                                        </div>
                                                        <input type="email" name="email" placeholder="" required class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="transaction_number">Password</label>
                                                    <div class="input-group  ">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                <i class="fas fa-key"></i>
                                                            </span>
                                                        </div>
                                                        <input type="password" name="password" placeholder="" required class="form-control">
                                                    </div>
                                                </div>                                                
                                            </div>
                                           
                                            <div class="form-group message-btn">
                                                <button type="submit" onclick="submit()" class="theme-btn style-one w-full">Login</button>
                                            </div>
                                        </form>
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