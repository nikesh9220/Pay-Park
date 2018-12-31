<?php

include "header2.php";
include "dbcon.php";

$m=$_POST["area"];
//echo "$m";

$sql1 = mysqli_query($connection, "SELECT *   FROM area WHERE areaname= '$m'  ");
while ($row1 = $sql1->fetch_assoc()) {

    $area_id= $row1['areaid'];
   // echo "$area_id";

}

?>
<!-- === BEGIN CONTENT === -->
<div id="content" xmlns="http://www.w3.org/1999/html">
    <div class="container background background-white">
        <div class="container">
            <div class="row margin-vert-50">
                <div class="animate fadeInUp">
                   <div class="accordion-toggle"></div>
<div class="row">
    <div class="center-block">

<form method="get">
    <div class="card">
        <div class="card-header bg-white"><div class="animate fadeInRightBig"><div class="col-md-6 col-md-offset-3.5 col-sm-offset-3">

                    <h1  style="background: white" class="login-page"><i class="fa fa-table">    &nbsp&nbsp &nbspAvailable Parkings.</i></h1></div>
            </div>

        <div class="card-block p-t-25">
            <div class="">
                <div class="pull-sm-right">
                    <div class="tools pull-sm-right"></div>
                </div>
            </div>
            <div class="background-white">
            <table class="table table-striped table-bordered table-hover" id="sample_1"><thead>
                <tr>
                    <th> ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contact No</th>

                    <th>Action</th>

                </tr>
                </thead>

<tbody>



                    <?php

                    $i=1;
                  //  echo "<table border='5' height='50' width='30' class='fadeInDown'><tr><th bgcolor='red' >ID</th><th>Name</th><th>Action</th></tr>";
                    $sql = mysqli_query($connection, "SELECT * FROM addparking WHERE addparking.areaid='$area_id  '   ");
                    while ($row = $sql->fetch_assoc()){
                       ?>

                <td><?php echo $row['pid']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['contactno']; ?></td>



                <td> <form method="get">
                                <input type="hidden" name="pid" value="<?php echo  $row['pid'] ?>">
                              <a href="checking.php?pid=<?php echo  $row['pid'];?>&sl=<?php echo  $row['slots'];?>">  <input class="btn btn-green" type="button" value="Book Now"  ></a>
                       </tr>
                            </form>

</tbody>    <?php



    } ?> </table>
     </div></div></div></div>


            </div>
        </div>
    </div>
</div>
<?php
include "footer2.php"; ?>

