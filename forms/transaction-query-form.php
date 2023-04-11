<?php ?>
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


