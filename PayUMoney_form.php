<?php
include "header2.php"
?>

    <div id="content">
    <div class="container background-white">
    <div class="container ">
    <div class="row margin-vert-30">


<?php

$MERCHANT_KEY = "rjQUPktU";
$SALT = "e5iIg1jwi8";
// Merchant Key and Salt as provided by Payu.

//$PAYU_BASE_URL = "https://sandboxsecure.payu.in";        // For Sandbox Mode
//$PAYU_BASE_URL = "https://secure.payu.in";            // For Production Mode
$PAYU_BASE_URL = "https://test.payu.in";
$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
    foreach($_POST as $key => $value) {
        $posted[$key] = $value;

    }
}

$formError = 0;

if(empty($posted['txnid'])) {
    // Generate random transaction id
    $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
    $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
    if(
        empty($posted['key'])
        || empty($posted['txnid'])
        || empty($posted['amount'])
        || empty($posted['firstname'])
        || empty($posted['email'])
        || empty($posted['phone'])
        || empty($posted['productinfo'])
        || empty($posted['surl'])
        || empty($posted['furl'])
        || empty($posted['service_provider'])
    ) {
        $formError = 1;
    } else {
        //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
        $hashVarsSeq = explode('|', $hashSequence);
        $hash_string = '';
        foreach($hashVarsSeq as $hash_var) {
            $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
            $hash_string .= '|';
        }

        $hash_string .= $SALT;


        $hash = strtolower(hash('sha512', $hash_string));
        $action = $PAYU_BASE_URL . '/_payment';
    }
} elseif(!empty($posted['hash'])) {
    $hash = $posted['hash'];
    $action = $PAYU_BASE_URL . '/_payment';
}
?>
    <html>
    <head>
        <script>
            var hash = '<?php echo $hash ?>';
            function submitPayuForm() {
                if(hash == '') {
                    return;
                }
                var payuForm = document.forms.payuForm;
                payuForm.submit();
            }
        </script>
    </head>
    <body onload="submitPayuForm()">


    <?php if($formError) { ?>


    <?php } ?>
    <div id="content">
        <div class="container background-white">
            <div class="container">
                <div class="row margin-vert-30">
                    <!-- Login Box -->
                    <div class="col-md-8 col-md-offset-2">
                        <form action="<?php echo $action; ?>" method="post" name="payuForm">
                            <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
                            <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
                            <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
                            <div class="signup-header">
                                <h2>Mandatory Parameters</h2>
                            </div>
                            <div class="input-group margin-bottom-20 col-md-8">
                                <label>Amount:</label>
                                <input name="amount" class="form-control margin-bottom-20" readonly value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" />
                            </div>
                            <div class="input-group margin-bottom-20 col-md-8">
                                <label>First Name:</label>
                                <input name="firstname" class="form-control margin-bottom-20" readonly id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" />
                            </div>
                            <div class="input-group margin-bottom-20 col-md-8">
                                <label>Email:</label>
                                <input name="email"  class="form-control margin-bottom-20" readonly id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" />
                            </div>
                            <div class="input-group margin-bottom-20 col-md-8">
                                <label>Phone Number:</label>
                                <input name="phone" class="form-control margin-bottom-20" readonly value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" />
                            </div>
                            <div class="input-group margin-bottom-20 col-md-8">
                                <label>Description:</label>
                                <textarea name="productinfo" class="form-control margin-bottom-20" readonly><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea>
                            </div>
                            <div class="input-group margin-bottom-20 col-md-8">
                                <input type="hidden" name="surl" value="<?php echo (empty($posted['surl'])) ? '' : $posted['surl'] ?>" size="64" />
                                <input type="hidden" name="furl" value="<?php echo (empty($posted['furl'])) ? '' : $posted['furl'] ?>" size="64" />
                                <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
                            </div>
                            <div class="input-group margin-bottom-20 col-md-8">
                                <?php if(!$hash) { ?>
                                    <center><input class="btn btn-primary btn-lg" type="submit" value="Pay Now" /></center>
                                <?php } ?>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    </body>
    </html>



<?php include "footer2.php" ;
?>