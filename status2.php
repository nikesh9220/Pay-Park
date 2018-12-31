
<?php include 'header2.php';?>
<?php include 'inc/dbcon.php';?>
<?php
if (isset($_GET['pid']) && $_GET['sl']) {
   echo  $_SESSION['pid']=$_GET['pid'];
	$slots=$_GET['sl'];
	$parking_Id=$_SESSION['pid'];
    $n=3;
}

?>

<div  class="container background-white">
    <h1>  <p>Parking Lots Status</p>
        <p class="h1">Red -> Reserved/Occupied , Yellow -> Available</p></h1>
    <!-- Table goes in the document BODY -->

    <section class="table-responsive">

        <table class="table table-striped table-bordered table-hover" id="sample_1"><thead>
<?php
$m;
//$slot="select slots from addparking where pid='".$parking_Id."'";
for ($x = 0; $x <= $slots; $x++) {

?>
<tr>
    <td 
    <?php

    $sql = "SELECT * FROM status WHERE pid='".$_SESSION['pid']."' and plotno='$x'";
    $result = mysqli_query($connection, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        echo "style=\"background: red;\"";
    } else if ($count == 0) {
        echo "style=\"background: yellow;\"";
        //  echo "PLOT NO" . $x . "  is Free";
    }
    echo ">";
	echo " <form method='get' action='demo.php'>";?>
    <input type='radio' name='slots' value='<?php echo $x;?>' <?php if($count==1){?> disabled <?php } ?>>Plot No <?php echo $x;?>
	<?php  echo "</td>";
    
    }


?>
</tr>
</table>
</section>

<input type="submit" name="slot" value="Continue">


</form>