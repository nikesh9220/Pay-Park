<?php
include  "header2.php";

echo "<div id=\"content\">
    <div class=\"container background-white\">
        <div class=\"container\">
            <div class=\"row margin-vert-30\">";
//session_start();
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$p=$_SESSION['email'];

$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="e5iIg1jwi8";

// Salt should be same Post Request 

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
  } else {
        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
         }
		 $hash = hash("sha512", $retHashSeq);
  
       if ($hash != $posted_hash) {

           echo "<h4>Invalid Transaction. Please try again</h4>";
           echo "											<div class=\"col-lg-7 text-center\">
											<a href='reserv.php'>	<input type=\"button\" class=\"btn btn-primary pull-right\" id=\"LogIn\" value=\"Book Another\" > </a></input>
											</div>
";

       } else {

           echo "<h3>Your order status is ". $status .".</h3>";
         echo "<h4>Your transaction id for this transaction is ".$txnid.". You may try making the payment by clicking the link below.</h4>";
           echo "											<div class=\"col-lg-7 text-center\">
											<a href='reserv.php'>	<input type=\"button\" class=\"btn btn-primary pull-right\" id=\"LogIn\" value=\"Retry\" > </a></input>
											</div>
";


       }
		 include  "footer2.php";
?>
