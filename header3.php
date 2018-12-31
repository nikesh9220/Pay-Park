<?php
/**
 * Created by PhpStorm.
 * User: Si
 * Date: 2/13/2018
 * Time: 10:49 AM
 */
?>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION["email"]))
{
    echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">";
}
?>

<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Welcome To Pay & Park</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="assets/img/p_blue.ico" rel="shortcut icon">
       <!-- <link href="1/sample in bootstrap v2/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">--->
        <link href="1/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/bootstrap-datetimepicker.css" />
		<link rel="stylesheet" type="text/css" href="inc/css/structure.css">
<link href="style.css" rel="stylesheet" />
<!--	<link href="Source/datepicker_bootstrap/datepicker_bootstrap.css" rel="stylesheet">-->
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
		<script src="mootools-more.js" type="text/javascript"></script>
		<script src="css/bootstrap-datetimepicker.min.js"></script>
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
                            <a href="index.html" title="">
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

                                    </li> <li>
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
