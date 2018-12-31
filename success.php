<?php
include "header2.php";
include 'inc/dbcon.php';
//session_start();
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="e5iIg1jwi8";

$id= $_SESSION['user_id'];
$p= $_SESSION['parking_id'];
$area_id= $_SESSION['area_id'];
$mno= $_SESSION['model_no'];
$vehicle_no=$_SESSION['vehicle_no'];
$plot= $_SESSION['plot_no'];
$d1= $_SESSION['date1'];
$d2= $_SESSION['date2'];
$vehicle_no=$_SESSION['vehicle_no'];


// Salt should be same Post Request

If (isset($_POST["additionalCharges"])) {
    $additionalCharges=$_POST["additionalCharges"];
    $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
} else {
    $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
}
$hash = hash("sha512", $retHashSeq);
if ($hash != $posted_hash) {
    echo "Invalid Transaction. Please try again";
} else {
    echo "<div id=\"content\">
    <div class=\"container background-white\">
        <div class=\"container\">
            <div class=\"row margin-vert-30\">";
    echo "<h3>Thank You. Your booking status is ". $status .".</h3>";
    echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
    echo "<h4>We have received a payment of Rs. " . $amount . ".</h4>";
   // echo $id;
    //echo $area_id;
    //echo $plot;
    //echo $mno;
    //echo $d1;
    //echo $d2;
 //echo $vehicle_no;
    $query = "insert into booking(uid,aid,pid,tid,model_no,vehicle_no,plotno,d1,d2,charges) values ('".$id."','".$area_id."','".$p."','".$txnid."','".$mno."','".$vehicle_no."','".$plot."','".$d1."','".$d2."','".$amount."')";
    $result= mysqli_query($connection,$query);
    if(!$result){
        //REDIRECT
        echo "error";
        //echo $mysqli_error($connection) ;
        exit;
    }


echo "											<div class=\"col-lg-7 text-center\">
											<a href='reserv.php'>	<input type=\"button\" class=\"btn btn-primary pull-right\" id=\"LogIn\" value=\"Book Another\" > </a></input>
											</div>
";


}
?>	