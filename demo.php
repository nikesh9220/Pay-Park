
<?php include 'header3.php';?>
<?php include 'inc/dbcon.php';
//session_start();
$p=$_SESSION['pid'];
$id=$_SESSION['uid'];
$plot=$_GET['slots'];

//echo "plot====>>" .$plot;
$d1= $_SESSION['d1'];
//echo $d1;
$d2= $_SESSION['d2'];
//echo "====".$d2;
/*
$vehicle_no=$_POST['vehicle_no'];
$model_no=$_POST['model_no'];

$d1=$_POST['dt1'];
$d2=$_POST['dt2']; */

//echo "user id =="."$id";
$sql1 = mysqli_query($connection, "SELECT areaid   FROM addparking WHERE pid= '$p'  ");
while ($row1 = $sql1->fetch_assoc()) {


        $area_id= $row1['areaid'];
  //      echo $area_id;

}

?>
<?php if(isset($_GET['slots']))
{
	echo "";
	//session_start();
	$sl=$_GET['slots'];
	
}	
 if(isset($_POST['booking']))
 {
 	$t1= new datetime ($_SESSION['d1']);
	$a1=new datetime ( $_SESSION['d2']);
	$interval1=$a1->diff($t1);
	$dif=$interval1->format('%d|%h');
	list($d,$h)=explode('|',$dif);
	$c=$d*24 + $h;
	$charge = $c*10;
     $vno=$_POST['vehicle_no'];
     $mno=$_POST['model_no'];

     echo $_SESSION['user_id']=$id;
	echo $_SESSION['parking_id']=$p;
     echo $_SESSION['area_id']=$area_id;
//$mno=     $_POST['$model_no'];

     echo $_SESSION['model_no']=$mno;
     echo $_SESSION['plot_no']=$plot;
     echo $_SESSION['date1']=$d1;
     echo $_SESSION['date2']=$d2;
     echo $_SESSION['vehicle_no']=$vno;






     /* $query = "insert into booking(uid,aid,pid,model_no,vehicle_no,plotno,d1,d2,charges) values ('".$_SESSION["uid"]."','".$area_id."','".$p."','".$_POST['model_no']."','".$_POST['vehicle_no']."','".$plot."','".$_SESSION['d1']."','".$_SESSION['d2']."','".$charge."')";
     $result= mysqli_query($connection,$query);
      if(!$result){
          //REDIRECT
         echo "error";
         //echo $mysqli_error($connection) ;
         exit;
      } */
   //  $qry2="insert into booking(uid,aid,pid,model_no,vehicle_no,d1,d2,charge) values ('".$_SESSION["uid"]."','".$area_id."'','".$p."','".$_POST['model_no']."','".$_POST['vehicle_no']."','".$_POST['dt1']."','".$_POST['dt2']."','".$charge."')";
     //$q2=mysqli_query($connection,$qry2);

     /*$qry="insert into addbooking(email,plotno,sid,model,platenumber,d1,d2,charge) values ('".$_SESSION["email"]."','".$p."','".$plot."','".$_POST['model_no']."','".$_POST['vehicle_no']."','".$_POST['dt1']."','".$_POST['dt2']."','".$charge."')";
	$q=mysqli_query($connection,$qry); */


     /*$stmt=$connection->prepare("insert into addbooking(email,plotno,street,sid,model,vehicle,platnumber,account,d1,d2,charge) values (?,?,?,?,?,?,?,?,?,?,?)");
     $stmt=bind_param("sssisssssss",$_POST['model'],$_POST['Plateno'],$_POST['plotno'],$_POST['d1'],$_POST['t1'],$_POST['d2'],$_POST['t2']);
     $stmt->execute();*/
	/*$t= new DateTime($_POST['t1']);
	$a= new DateTime($_POST['t2']);
	$interval=$a->diff($t);*/
	

	echo "<script language='javascript'>alert('Your Charge is ".$charge."');</script>";
	
	echo"<script language='javascript'>window.location=http://www.continue.com;</script>";

     $vehicle_no=$_POST['vehicle_no'];
     $model_no=$_POST['model_no'];

     $d1=$_POST['dt1'];
     $d2=$_POST['dt2'];

     echo "<script language='javascript'>
	var ans = confirm ('Your Charge is ".$charge."');
	if (ans)
		window.location='/paypark/payment.php?charge=$charge&&uid=$id&&aid=$area_id&&pid=$p&&model_no=$model_no&&vehicle=$vehicle_no&&d1=$d1&&d2=$d2&&plotno=$plot';
	
	</script>";


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
                            <input type="text"  name="plotno"   class="form-control margin-bottom-20" value="<?php echo "Plot No ".$plot."";?>" readonly placeholder="Your parking Slot" required />
                        </div>
	                    <div class="row">
                            

                                <div class="input-group margin-top-20 col-md-1">
                                <input type="submit" name="booking"  class="btn btn-primary pull-center" value="Continue"/>
                            </div>
                        </div></div>
                        
                    </form>
                </div>
                <!-- End Login Box -->
            </div>
    </div>
</div>

<script type="text/javascript">
    	$(".form_datetime").datetimepicker({
        format: "dd-mm-yyyy hh:ii",
        autoclose: true,
        todayBtn: true,
        startDate: "",
        minuteStep: 00,
		//daysOfWeekDisabled:[0, 6],
		//hoursDisabled: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 17, 18, 19, 20, 21, 22, 23]
		});
		</script>
<!-- === END CONTENT === -->
<?php
 include "footer3.php" 
 

 ?>
 