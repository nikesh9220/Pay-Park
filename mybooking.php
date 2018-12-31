<?php
/**
 * Created by PhpStorm.
 * User: Si
 * Date: 3/28/2018
 * Time: 10:08 PM
 */
include "header2.php";
include "inc/dbcon.php";

$uid=$_SESSION['uid'];
?>








    <div id="content">
        <div class="container background-white">
            <div class="container ">
                <div class="row margin-vert-30">

                    <section class="table-responsive">
<?php
                        $sql1 = "SELEct uid FROM booking WHERE uid=$uid";
                        $result1 = mysqli_query($connection, $sql1);
                        $count=mysqli_num_rows($result1);
                        //while($row = mysqli_fetch_assoc($result))
                        if ($count>=0){?>

                        <!-- BEGIN EXAMPLE1 TABLE PORTLET-->
                        <div class="card">
                            <div class="card-header bg-white"><div class="animate fadeInRightBig"><div class="col-md-6 col-md-offset-3.5 col-sm-offset-3">

                                          <h1  style="background: white" class="login-page"><i class="fa fa-table">    &nbsp&nbsp &nbspYour Previous Booking</i></h1></div>
                                </div>
                            <div class="card-block p-t-25">
                                <div class="">
                                    <div class="pull-sm-right">
                                        <div class="tools pull-sm-right"></div>
                                    </div>
                                </div><div class="animate fadeInLeftBig">
                                <table class="table table-striped table-bordered table-hover" id="sample_1">

                                    <thead>
                                    <tr>
                                        <th>Booking ID</th>
                                        <th>City</th>
                                        <th>Area </th>
                                        <th>Parking Name</th>
                                        <th>Address</th>
                                        <th>Contat No</th>
                                        <th>Check In Date</th>
                                        <th>Checkout Date</th>
                                        <th>Transaction Id</th>
                                        <th>Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                    $sql = "SELEct * FROM booking,city,area,addparking WHERE uid=$uid &&city.cityid=area.cityid &&area.areaid=booking.aid &&booking.pid=addparking.pid";
                                    $result = mysqli_query($connection, $sql);
                                    while($row = mysqli_fetch_assoc($result)){


                                        ?>
                                        <tr>
                                            <td><?php echo $row['bid']; ?></td>
                                            <td><?php echo $row['cityname']; ?></td>
                                            <td><?php echo $row['areaname']; ?></td>

                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['address']; ?></td>
                                            <td><?php echo $row['contactno']; ?></td>
                                            <td><?php echo $row['d1']; ?></td>
                                            <td><?php echo $row['d2']; ?></td>
                                            <td><?php echo $row['tid']; ?></td>

                                            <td><?php echo $row['charges']; ?></td></tr>
                                    <?php } ?>
                                    </tbody>

                                </table></div>
                                <div class="col-md-6 col-md-offset-5 col-sm-offset-3"><div class="animate fadeInUpBig">

                                  <button type="button" class="btn btn-primary btn-lg">Book Another</button></a></div>  </div>
                                <?php } else { ?>
                            <h1>Sorry You Dosen't Made Any Booking in Past.
                            We Hope We Are Able to serve you better</h1>
                            </div>
                        </div>
<?php }?>














</section>
                </div>
            </div>
        </div>
    </div>



<?php include "footer2.php";?>