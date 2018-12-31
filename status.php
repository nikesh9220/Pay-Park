<?php
if (isset($_GET['pid'])) {
    $parking_Id=$_GET['pid'];
}

?>
<?php include 'header2.php';?>
<?php include 'inc/dbcon.php';?>
<div  class="container background-white">
    <h1>  <p>Parking Lots Status</p>
        <p class="h1">Red -> Reserved/Occupied , Yellow -> Available</p></h1>
    <!-- Table goes in the document BODY -->

    <section class="table-responsive">

        <table class="table table-striped table-bordered table-hover" id="sample_1"><thead>



            <tr>
                <td <?php
                $sql="SELECT * FROM status WHERE pid='$parking_Id' and plotno='001'";
                $result=mysqli_query($connection, $sql);
                $count=mysqli_num_rows($result);
                if($count==1){
                    echo "style=\"background: red;\"";}
                    else if($count==0){
                        echo "style=\"background: yellow;\"";
                    }
                ?>>PL 001</td>
                <td <?php
                $sql="SELECT * FROM status WHERE pid='$parking_Id' and plotno='010'";
                $result=mysqli_query($connection, $sql);
                $count=mysqli_num_rows($result);
                if($count==1){
                    echo "style=\"background: red;\"";}
                else if($count==0){
                    echo "style=\"background: yellow;\"";
                }
                ?>>PL 010</td>
            </tr>
            <tr>
                <td <?php
                $sql="SELECT * FROM status WHERE pid='$parking_Id' and plotno='002'";
                $result=mysqli_query($connection, $sql);
                $count=mysqli_num_rows($result);
                if($count==1){
                    echo "style=\"background: red;\"";}
                else if($count==0){
                    echo "style=\"background: yellow;\"";
                }
                ?>>PL 002</td>
                <td <?php
                $sql="SELECT * FROM status WHERE pid='$parking_Id' and plotno='011'";
                $result=mysqli_query($connection, $sql);
                $count=mysqli_num_rows($result);
                if($count==1){
                    echo "style=\"background: red;\"";}
                else if($count==0){
                    echo "style=\"background: yellow;\"";
                }
                ?>>PL 011</td>            </tr>
            <tr><td <?php
                $sql="SELECT * FROM status WHERE pid='$parking_Id' and plotno='003'";
                $result=mysqli_query($connection, $sql);
                $count=mysqli_num_rows($result);
                if($count==1){
                    echo "style=\"background: red;\"";}
                else if($count==0){
                    echo "style=\"background: yellow;\"";
                }
                ?>>PL 003</td>
                <td <?php
                $sql="SELECT * FROM status WHERE pid='$parking_Id' and plotno='012'";
                $result=mysqli_query($connection, $sql);
                $count=mysqli_num_rows($result);
                if($count==1){
                    echo "style=\"background: red;\"";}
                else if($count==0){
                    echo "style=\"background: yellow;\"";
                }
                ?>>PL 012</td>
            </tr>
            <tr><td <?php
                $sql="SELECT * FROM status WHERE pid='$parking_Id' and plotno='004'";
                $result=mysqli_query($connection, $sql);
                $count=mysqli_num_rows($result);
                if($count==1){
                    echo "style=\"background: red;\"";}
                else if($count==0){
                    echo "style=\"background: yellow;\"";
                }
                ?>>PL 004</td>
                <td <?php
                $sql="SELECT * FROM status WHERE pid='$parking_Id' and plotno='013'";
                $result=mysqli_query($connection, $sql);
                $count=mysqli_num_rows($result);
                if($count==1){
                    echo "style=\"background: red;\"";}
                else if($count==0){
                    echo "style=\"background: yellow;\"";
                }
                ?>>PL 013</td></tr>

            <tr>
                <td <?php
                $sql="SELECT * FROM status WHERE pid='$parking_Id' and plotno='005'";
                $result=mysqli_query($connection, $sql);
                $count=mysqli_num_rows($result);
                if($count==1){
                    echo "style=\"background: red;\"";}
                else if($count==0){
                    echo "style=\"background: yellow;\"";
                }
                ?>>PL 005</td>
                <td <?php
                $sql="SELECT * FROM status WHERE pid='$parking_Id' and plotno='014'";
                $result=mysqli_query($connection, $sql);
                $count=mysqli_num_rows($result);
                if($count==1){
                    echo "style=\"background: red;\"";}
                else if($count==0){
                    echo "style=\"background: yellow;\"";
                }
                ?>>PL 014</td>
            </tr>
            <tr>
            <td <?php
            $sql="SELECT * FROM status WHERE pid='$parking_Id' and plotno='006'";
            $result=mysqli_query($connection, $sql);
            $count=mysqli_num_rows($result);
            if($count==1){
                echo "style=\"background: red;\"";}
            else if($count==0){
                echo "style=\"background: yellow;\"";
            }
            ?>>PL 006</td>

            <td <?php
            $sql="SELECT * FROM status WHERE pid='$parking_Id' and plotno='015'";
            $result=mysqli_query($connection, $sql);
            $count=mysqli_num_rows($result);
            if($count==1){
                echo "style=\"background: red;\"";}
            else if($count==0){
                echo "style=\"background: yellow;\"";
            }
            ?>>PL 015</td>
            </tr>
            <tr>
                <td <?php
                $sql="SELECT * FROM status WHERE pid='$parking_Id' and plotno='007'";
                $result=mysqli_query($connection, $sql);
                $count=mysqli_num_rows($result);
                if($count==1){
                    echo "style=\"background: red;\"";}
                else if($count==0){
                    echo "style=\"background: yellow;\"";
                }
                ?>>PL 007</td>
                <td <?php
                $sql="SELECT * FROM status WHERE pid='$parking_Id' and plotno='016'";
                $result=mysqli_query($connection, $sql);
                $count=mysqli_num_rows($result);
                if($count==1){
                    echo "style=\"background: red;\"";}
                else if($count==0){
                    echo "style=\"background: yellow;\"";
                }
                ?>>PL 016</td>
            </tr>
            <tr>
                <td <?php
                $sql="SELECT * FROM status WHERE pid='$parking_Id' and plotno='008'";
                $result=mysqli_query($connection, $sql);
                $count=mysqli_num_rows($result);
                if($count==1){
                    echo "style=\"background: red;\"";}
                else if($count==0){
                    echo "style=\"background: yellow;\"";
                }
                ?>>PL 008</td>
                <td <?php
                $sql="SELECT * FROM status WHERE pid='$parking_Id' and plotno='017'";
                $result=mysqli_query($connection, $sql);
                $count=mysqli_num_rows($result);
                if($count==1){
                    echo "style=\"background: red;\"";}
                else if($count==0){
                    echo "style=\"background: yellow;\"";
                }
                ?>>PL 017</td>
            </tr>
            <tr>
                <td <?php
                $sql="SELECT * FROM status WHERE pid='$parking_Id' and plotno='009'";
                $result=mysqli_query($connection, $sql);
                $count=mysqli_num_rows($result);
                if($count==1){
                    echo "style=\"background: red;\"";}
                else if($count==0){
                    echo "style=\"background: yellow;\"";
                }
                ?>>PL 009</td>
                <td <?php
                $sql="SELECT * FROM status WHERE pid='$parking_Id' and plotno='018'";
                $result=mysqli_query($connection, $sql);
                $count=mysqli_num_rows($result);
                if($count==1){
                    echo "style=\"background: red;\"";}
                else if($count==0){
                    echo "style=\"background: yellow;\"";
                }
                ?>>PL 018</td>
            </tr>
                    </table></center>

    </section>
</section>
<?php
$pid=$_GET['pid'];

?>
    <form method="post" name="pid" action="vehicle.php">
        <input type="hidden" name="p" value="<?php echo "$pid" ?>">
        <input type="submit" >
    </form>


</div>
