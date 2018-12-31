<?php include 'header3.php';?>
<?php include 'inc/dbcon.php';
//session_start();
$p=$_SESSION['pid'];
$email=$_SESSION['email'];

$uid=$_SESSION['uid'];
?>
<?php if(isset($_GET['charge']))
{
    echo "";
    //session_start();
    $charge=$_GET['charge'];

}

$udf1=$_GET['uid'];
$udf2=$_GET['aid'];
$udf3=$_GET['pid'];
$udf4=$_GET['model_no'];
$udf5=$_GET['vehicle'];
$udf6=$_GET['plotno'];
$udf7=$_GET['d1'];
$udf8=$_GET['d2'];





$sql1 = mysqli_query($connection, "SELECT *   FROM users WHERE id= '$uid'  ");
while ($row1 = $sql1->fetch_assoc()) {


    $phone= $row1['phone'];
    // echo $area_id;

}
?>
<div id="content">
    <div class="container background-white">
        <div class="container">
            <div class="row margin-vert-30">
                <!-- Login Box -->
                <div class="col-md-8 col-md-offset-2">

                    <form  method="POST" action="PayUMoney_form.php" class="login-page">
                        <div class="signup-header">
                            <h2>Check Payment Details</h2>
                        </div>

                        <div class="input-group margin-bottom-20 col-md-8">
                            <label>Name:</label>
                            <input type="text"  name="firstname"   class="form-control margin-bottom-20" value="<?php echo "".$name."";?>" readonly placeholder="Your Charge" required />
                        </div>
                        <div class="input-group margin-bottom-20 col-md-8">
                            <label>Email:</label>
                            <input type="text"  name="email"   class="form-control margin-bottom-20" value="<?php echo "".$email."";?>" readonly placeholder="Your Charge" required />
                        </div>
                        <div class="input-group margin-bottom-20 col-md-8">
                            <label>Phone No:</label>
                            <input type="text"  name="phone"   class="form-control margin-bottom-20" value="<?php echo "".$phone."";?>" readonly placeholder="Your Charge" required />
                        </div>

                        <div class="input-group col-md-8">
                            <input type="hidden"  name="udf1"   class="form-control margin-bottom-20" value="<?php echo "".$udf1."";?>" readonly placeholder="Your Charge" required />
                            <input type="hidden"  name="udf2"   class="form-control margin-bottom-20" value="<?php echo "".$udf2."";?>" readonly placeholder="Missing" required />
                            <input type="hidden"  name="udf3"   class="form-control margin-bottom-20" value="<?php echo "".$udf3."";?>" readonly placeholder="Your Charge" required />
                            <input type="hidden"  name="udf4"   class="form-control margin-bottom-20" value="<?php echo "".$udf4."";?>" readonly placeholder="Your Charge" required />
                            <input type="hidden"  name="udf5"   class="form-control margin-bottom-20" value="<?php echo "".$udf5."";?>" readonly placeholder="Your Charge" required />
                        </div>
                        <!--for parking name-->
                        <div class="input-group margin-bottom-20 col-md-8">
                            <?php
                            $sql1 = "SELEct name FROM addparking WHERE pid='$udf3'";
                            $result1 = mysqli_query($connection, $sql1);
                            while($row = mysqli_fetch_assoc($result1)){
                                $s=$row['name'];
                            }

                            ?>
                            <label>Parking Name:</label>
                            <input type="text"  name="udf6"   class="form-control margin-bottom-20" value="<?php echo "".$s."";?>" readonly placeholder="Your Charge" required />
                        </div>

                        <div class="input-group margin-bottom-20 col-md-8">
                            <label>Plot No:</label>
                            <input type="text"  name="udf6"   class="form-control margin-bottom-20" value="<?php echo "".$udf6."";?>" readonly placeholder="Your Charge" required />
                        </div>
                        <div class="input-group col-md-8">
                            <input type="hidden"  name="udf7"   class="form-control margin-bottom-20" value="<?php echo "".$udf7."";?>" readonly placeholder="Your Charge" required />
                            <input type="hidden"  name="udf8"   class="form-control margin-bottom-20" value="<?php echo "".$udf8."";?>" readonly placeholder="Your Charge" required />
                        </div>

                        <div class="input-group margin-bottom-20 col-md-8">
                            <label>Charge</label>
                            <input type="text"  name="amount"   class="form-control margin-bottom-20" value="<?php echo "".$charge."";?>" readonly placeholder="Your Charge" required />
                        </div>
                        <div class="input-group margin-bottom-20 col-md-8">
                            <input type="hidden" name="productinfo" value="parking Charge">
                            <input type="hidden" name="surl" value="http://localhost/paypark/success.php">
                            <input type="hidden" name="furl" value="http://localhost/paypark/failure.php">


                            <div>
                                <div class="input-group margin-top-20 col-md-12">
                                    <center><input type="submit" name="booking" class="btn btn-primary"  value="Pay"/></center>
                                </div>
                            </div></div>

                    </form>
                </div>
                <!-- End Login Box -->
            </div>
        </<div>
        </div>
        <?php
        include "footer3.php"


        ?>
 