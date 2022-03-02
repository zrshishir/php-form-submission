<?php require_once "view/header.php"; ?>
    <div style="text-align: left; margin: 20px 0px 10px; padding-left: 120px;"> 
        <a id="btnAddAction" href="index.php" class="btn btn-primary">Go to home</a>
    </div>
    <div class="container p-4" style="text-align:center">
        <form class="form-control" id="receiptForm">
        <div id="validity-message">
            <?php
                if(isset($validity['resp_code'])){
                    echo $validity['message'];
                }
            ?>
        </div>
        <div>
            <label class="form-label" style="padding-top: 20px;">Amount</label>
            <span id="amount-info" class="info"></span><br /> 
            <input type="text" name="amount" id="amount" class="form-control">
        </div>

        <div>
            <label style="padding-top: 20px;">Buyer Name</label> 
            <span id="buyer-info" class="info"></span><br /> 
            <input type="text" name="buyer" id="buyer" class="form-control">
        </div>

        <div>
            <label style="padding-top: 20px;">Receipt ID</label> 
            <span id="receipt-info" class="info"></span><br /> 
            <input type="text" name="receipt_id" id="receipt" class="form-control">
        </div>

        <div>
            <label style="padding-top: 20px;">Items</label> 
            <span id="items-info" class="info"></span><br /> 
            <input type="text" name="items" id="items" class="form-control">
        </div>

        <div>
            <label style="padding-top: 20px;">Buyer Email</label> 
            <span id="buyer-email-info" class="info"></span><br /> 
            <input type="text" name="buyer_email" id="buyer-email" class="form-control">
        </div>

        <div>
            <label style="padding-top: 20px;">Note</label> 
            <span id="note-info" class="info"></span><br /> 
            <input type="text" name="note" id="note" class="form-control">
        </div>

        <div>
            <label style="padding-top: 20px;">City</label> 
            <span id="city-info" class="info"></span><br /> 
            <input type="text" name="city" id="city" class="form-control">
        </div>

        <div>
            <label style="padding-top: 20px;">Phone</label> 
            <span id="phone-info" class="info"></span><br /> 
            <input type="text" name="phone" id="phone" class="form-control">
        </div>

        <div>
            <label style="padding-top: 20px;">Entry By</label> 
            <span id="entry-by-info" class="info"></span><br /> 
            <input type="text" name="entry_by" id="entry-by" class="form-control">
        </div>
        <br/>
        <div>
            <button type="submit" class="btn btn-primary">Generate</button>
            <button type="reset" id="resetButton" class="btn btn-danger">Reset</button>
        </div>
        </div>
    </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.0.js" type="text/javascript"></script>
    <script src="view/js/form_validation.js"></script>

</body>
</html>