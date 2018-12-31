
<?php include 'header3.php';?>
<?php include 'inc/dbcon.php';
//session_start();
$p=$_SESSION['pid'];
?>
<?php if(isset($_GET['slots']))
{
	echo "";
	//session_start();
	$sl=$_GET['slots'];
	
}	
 if(isset($_POST['booking']))
 {
	 $qry="insert into addbooking(email,plotno,sid,model,platenumber,d1,t1,d2,t2) values ('".$_SESSION["email"]."','".$p."','".$sl."','".$_POST['model_no']."','".$_POST['vehicle_no']."','".$_POST['d1']."','".$_POST['t1']."','".$_POST['d2']."','".$_POST['t2']."')";
	$q=mysqli_query($connection,$qry);
	/*$stmt=$connection->prepare("insert into addbooking(email,plotno,street,sid,model,vehicle,platnumber,account,d1,d2,charge) values (?,?,?,?,?,?,?,?,?,?,?)");
	$stmt=bind_param("sssisssssss",$_POST['model'],$_POST['Plateno'],$_POST['plotno'],$_POST['d1'],$_POST['t1'],$_POST['d2'],$_POST['t2']);
	$stmt->execute();*/
	$t= new DateTime($_POST['t1']);
	$a= new DateTime($_POST['t2']);
	$interval=$a->diff($t);
	$t1= new DateTime($_POST['d1']);
	$a1= new DateTime($_POST['d2']);
	$interval1=$a1->diff($t1);
	echo $interval1->format('%d');
	echo "<scrpit type='text/javascript'>alert(Your Charge is );</script>";
	//header("Location:payment.php");
 }
?>

<div id="content">
    <div class="container background-white">
        <div class="container">
            <div class="row margin-vert-30">
                <!-- Login Box -->
                <div class="col-md-8 col-md-offset-2">
				
                    <form  method="POST" class="login-page">
                        <div class="login-header margin-bottom-30">
                            <h2>Enter Your Vehicle Details</h2>
                        </div>
						 
                        <div class="input-group margin-bottom-20 col-md-8">
                                       
                            <input type="text" id="model" name="model_no" placeholder="Enter Your Model" class="form-control" required>
                        </div>
						<div class="input-group margin-top-20 col-md-8">           
                            <input type="text" id="Plateno" name="vehicle_no"  maxlength="10" class="form-control margin-bottom-20" placeholder="Plate Number-e.g(eg. GJ 27 AR 123)" required />
                        </div>
						<div class="input-group margin-top-20 col-md-8">           
                            <input type="text"  name="plotno"   class="form-control margin-bottom-20" value="<?php echo "Plot No ".$sl."";?>" readonly placeholder="Your parking Slot" required />
                        </div>
						<div class="row">
						<div class="control-group margin-top-20 col-sm-4">  
						<label>From Date:</label>
							<input type="date" name="d1" class="form-control margin-bottom-20" value="02.11.2014 11:05AM">
						</div>	
						
						<div class="control-group  margin-top-20 col-sm-4	">
                                    <label>From Time:</label>
                                    <div class="controls input-append date form_time" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                                        <input size="16" type="time" id="t1" value="" class="form-control margin-bottom-20" name="t1" >
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                    </div>
                                    <input type="hidden" id="dtp_input3" value="" /><br/>
                         </div>
						 </div>
						 <div class="row">
						<div class="control-group margin-top-20 col-sm-4">  
						<label>To Date:</label>
							<input type="date" name="d2" class="form-control margin-bottom-20" value="02.11.2014 11:05AM">
						</div>	
						
						<div class="control-group  margin-top-20 col-sm-4	">
                                    <label>To Time:</label>
                                    <div class="controls input-append date form_time" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                                        <input size="16" id="t2" type="time" value="" class="form-control margin-bottom-20" name="t2">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                    </div>
                                    <input type="hidden" id="dtp_input3" value="" /><br/>
                         </div>
						 </div>
                        <div class="row">
                            
                            <div class="input-group margin-top-20 col-md-7">
							
                                <input type="submit" name="booking"  value="Continue"/>
                            </div>
                        </div></div>
                        
                    </form>
                </div>
                <!-- End Login Box -->
            </div>
        </div>
    </div>
</div>
<!-- === END CONTENT === -->
<?php
 include "footer3.php" 
 

 ?>
 