<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $page = $_SERVER['PHP_SELF'];
    $sec = "1";
    ?>

        <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<style>
	.red-icon {
		color:#ff0000;
	}
	.green-icon {
		color:#009933;
	}
	.table-responsive
	{
		width:50%;
	}
</style>
    <title>Welcome to Pay & Park</title>
    <!-- Meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon -->
    <link href="assets/img/p_blue.ico" rel="shortcut icon">
    <!-- table css -->
    <link type="text/css" rel="stylesheet" href="admin/vendors/select2/css/select2.min.css" />
    <link type="text/css" rel="stylesheet" href="admin/vendors/datatables/css/scroller.bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="admin/vendors/datatables/css/colReorder.bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="admin/vendors/datatables/css/dataTables.bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="admin/css/pages/dataTables.bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="admin/css/pages/tables.css" />
    <link type="text/css" rel="stylesheet" href="#" id="skin_change" />


    <!--        <link href="1/sample in bootstrap v2/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
            <link href="1/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen"> -->

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="inc/css/structure.css">
    <link href="style.css" rel="stylesheet" />
    <link href="Source/datepicker_bootstrap/datepicker_bootstrap.css" rel="stylesheet">
    <!-- Google Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    <script src="mootools-more.js" type="text/javascript"></script>
    <script src="Source/Locale.en-US.DatePicker.js" type="text/javascript"></script>
    <script src="Source/Picker.js" type="text/javascript"></script>
    <script src="Source/Picker.Attach.js" type="text/javascript"></script>
    <script src="Source/Picker.Date.js" type="text/javascript"></script>
</head>
<body>
<div id="body-bg">
    <!-- Phone/Email -->
    <div id="pre-header" class="background-gray-lighter">
        <div class="container no-padding">
            <div class="row hidden-xs">
                <div class="col-sm-6 padding-vert-5">
                    <strong>Customer Care:</strong>&nbsp;7041791111
                </div>
                <div class="col-sm-6 text-right padding-vert-5">
                    <strong><?php
                        if (session_status() == PHP_SESSION_NONE) {
                            session_start();
                        }
                        if( isset( $_SESSION['email'] ) )
                        {
                            $name = $_SESSION["name"];
                            echo "Welcome &nbsp". $name. " "."";
                        }

                        ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Phone/Email -->
    <!-- Header -->
    <div id="header">
        <div class="container">
            <div class="row">
                <!-- Logo -->
                <div class="logo">
                    <a href="main.php" title="">
                        <img src="assets/img/typo/logo3.png" alt="Logo" />
                    </a>
                </div>
                <!-- End Logo -->
            </div>
        </div>
    </div>
    <!-- End Header -->
    <!-- Top Menu -->
    <div id="hornav" class="bottom-border-shadow">
        <div class="container no-padding border-bottom">
            <div class="row">
                <div class="col-md-8 no-padding">
                    <div class="visible-lg">
                        <ul id="hornavmenu" class="nav navbar-nav">
                            <li>
                                <a href="main.php" class="fa-home active">Home</a>
                            </li>
                            <li>
                               <a href="ParkingLotDisplay.php" class="fa-apple" >Live Mode</a>                            </li>

                            <li><a href="reserv.php"  class="fa-angle-double-right ">Reserv</a>
                            </li>

                            <li>
                                <a class="fa-table" href="mybooking.php">My Booking</a></span>

                            </li><li>
                                <a href="process-log-out.php" class="fa-comment ">Logout</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-4 no-padding">
                    <ul class="social-icons pull-right">
                        <li class="social-rss">
                            <a href="#" target="_blank" title="RSS"></a>
                        </li>
                        <li class="social-twitter">
                            <a href="#" target="_blank" title="Twitter"></a>
                        </li>
                        <li class="social-facebook">
                            <a href="#" target="_blank" title="Facebook"></a>
                        </li>
                        <li class="social-googleplus">
                            <a href="#" target="_blank" title="Google+"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Menu -->

    <!-- === END HEADER === -->
</div>
</body>


</head>
<?php
//include "header2.php";
?>
<body>

<?php include 'hardware/dbcon_hr.php';
	$sql = "SELECT Position, Available FROM ParkingLot Order by Position";
	$result = $conn->query($sql);
	//header("Refresh:1");
?>
<div id="content">
    <div class="container background-white">
        <div class="row margin-vert-40">
            <?php include "sidebar.php" ?>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">


                        <div class="container-fluid">

	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th> Position </th>
					<th> Availability </th>
				</tr>
			</thead>
		 	<?php while($row = $result->fetch_assoc()) { ?> 
				<tbody>
					<tr>
	 					<td> P <?php echo $row['Position']; ?>  </td>
						<td> 
							<?php if ( $row['Available'] == 1 ) { ?>
								<p><span class="glyphicon glyphicon-ok green-icon"></span></p>
							<?php } else { ?>
								<p><span class="glyphicon glyphicon-remove red-icon"></span></p>
							<?php } ?>
						</td>
		 			</tr>
				</tbody>
			<?php } ?>
		</table>
                    <div class="col-md-12">
                        <p><h6>Currently This Project is Under Devlopment so We Used only Two Sensors!</h6></p>
                        <p><h6>But in Near Feature We Will Come as Startup Company.Thanks For Supporting Us!</h6></p>
            </div>

            </div>
                        </div>
                    </div>
                </div>
</div>
</div>

    </div></div><?php 	$conn->close(); ?>

</body>
</html>