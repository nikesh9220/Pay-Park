
<?php include 'header3.php';?>
<?php include 'inc/dbcon.php';?>
<?php
if (isset($_GET['pid']) && $_GET['sl']) {
      $_SESSION['pid']=$_GET['pid'];
    $slots=$_GET['sl'];
    $parking_Id=$_SESSION['pid'];

    //   $td1="2018-03-04 00:15";
   // $td2="2018-07-17 00:52";
    //$n=3;
}
?>

<div id="content">
    <div class="container background-white">
        <div class="container">
            <div class="row margin-vert-30">
                <!-- Login Box -->
                <div class="col-md-8 col-md-offset-2">

                    <form  method="POST" action="status3.php" class="login-page">
                        <div class="login-header margin-bottom-30">
                            <h2>Select Dates For Check Avaiblity </h2>
                        </div>
                        <div class="row">
							<div class="col-sm-5 control-group margin-top-10">
                            
                                <label>From Date:</label>
                                <div class="input-append date form_datetime" >
                                    <input  id="dt1"  required class="form-control" size="16" type="text" value="" name="dt1" readonly>
                                    <span class="add-on"><i class="icon-remove"></i></span>
                                    <span class="add-on"><i class="icon-th"></i></span>
                                </div>
                            </div>
							<div class="col-sm-5 control-group margin-top-10 col-md-offset-2">
                            
                                <label>To Date:</label>
                                <div class="input-append date form_datetime" >
                                    <input  id="dt2" required class="form-control" size="16" type="text" value="" name="dt2" readonly>
                                    <span class="add-on"><i class="icon-remove"></i></span>
                                    <span class="add-on"><i class="icon-th"></i></span>
                                </div><br><br><br><br><br><br><br><br>
                            </div>


							<div class="col-sm-12 control-group margin-top-20">
							 <center><input class="btn-green" type="submit" name="booking"  value="Check Avaiblity"/></center><br><br><br><br><br>
							 </div>
						</div>

                        </div>
                        <input required type="hidden" name="sl" value="<?php echo "$slots" ?>" " >
                        <input  required type="hidden" name="pid" value="<?php echo "$parking_Id" ?>" ">




                            
                               
                        </div>
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
