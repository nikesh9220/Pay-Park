
<?php include 'header2.php';?>
<?php include 'inc/dbcon.php';?>
<?php
if (isset($_POST['pid']) && $_POST['sl']) {
      $_SESSION['pid']=$_POST['pid'];
    $slots=$_POST['sl'];
    $parking_Id=$_POST['pid'];
   // $td1="2018-03-04 00:15";
    //$td2="2018-07-17 00:52";
  //  $td1=new datetime($_POST=['dt1']);
    //$td2=$_POST=['dt2'];

    $td1= $_POST['dt1'];
      $_SESSION['d1']=$td1;

    //echo $td1;
    $td2= $_POST['dt2'];
    $_SESSION['d2']=$td2;

    //echo "====".$td2;
    $n=3;

}

?>

<div class="container background-white">
    <h3>  <p>Parking Lots Status</p>
        <p class="h3">Red -> Reserved/Occupied , GREEN -> Available</p></h3>
    <!-- Table goes in the document BODY -->

    <section class="table-responsive">

        <table class="table table-striped table-bordered table-hover" id="sample_1"><thead>
            <?php
            $d1 = "SELECT d1 FROM booking WHERE pid='".$_SESSION['pid']." ";
            mysqli_query($connection, $d1);

            $d2 = "SELECT d2 FROM booking WHERE pid='".$_SESSION['pid']." ";

            mysqli_query($connection, $d2);
            $m;
            $s=$slots/2;
            $a=$s+1?>

           <?php for ($x = 1; $x <= $s; $x++) {

            ?>
            <tr>

                    <td
                    <?php

                $sql = "SELECT * FROM booking WHERE pid='" . $_SESSION['pid'] . "' && plotno='$x' &&d1<='$td1'  &&d2>='$td2' ";
                $result = mysqli_query($connection, $sql);
                $count = mysqli_num_rows($result);
                if ($count == 1) {

                    echo "style=\"background: #8b0000;\"";
                } else if ($count == 0) {
                    echo "style=\"background: #006400;\"";
                    //  echo "PLOT NO" . $x . "  is Free";
                }
                echo ">";
                echo " <form method='GET' action='demo.php'>"; ?>
                <input type='radio' name='slots'
                       value='<?php echo $x; ?>' <?php if ($count == 1) { ?> disabled <?php } ?>><font aling="centre"  color="white">Plot
                    No <?php echo $x; ?>

                    <?php echo "</td>"; ?>


                    <td>
                    <td
                    <?php

                    $sql = "SELECT * FROM booking WHERE pid='" . $_SESSION['pid'] . "' && plotno='$a' &&d1<='$td1'  &&d2>='$td2' ";
                    $result = mysqli_query($connection, $sql);
                    $count = mysqli_num_rows($result);
                    if ($count == 1) {

                        echo "style=\"background: #8b0000;\"";
                    } else if ($count == 0) {
                        echo "style=\"background: #006400;\"";
                        //  echo "PLOT NO" . $x . "  is Free";
                    }
                    echo ">";
                    echo " <form method='GET' action='demo.php'>"; ?>
                    <input type='radio' name='slots'
                           value='<?php echo $a; ?>' <?php if ($count == 1) { ?> disabled <?php } ?>><font
                            color="white">Plot No <?php echo $a; ?>

                        <?php echo "</td>";
                        $a=$a+1;

                         }?></font>
                </font>
            </tr>







        </table>
    </section>
    <div class="col-md-11.2 text-center">


        <input type="submit" class="btn btn-primary" name="slot" value="Continue">


        </div>

</div>
    </form>