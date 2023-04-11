<?php 
  $errors = [];
?>
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