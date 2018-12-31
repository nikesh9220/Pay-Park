
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION["email"]))
{
    echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">";
}
include "inc/dbcon.php";
?>

<?php

//prompt function
function prompt($prompt_msg){
    echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."');
        if(answer != null){
            
            //document.write(answer);
            }
            else
             {
                    var answer='Anand';
                    //document.write(answer);
               }
           </script>");


    $answer = "<script type='text/javascript'> document.write(answer);
</script>";
      return($answer);


}

//program
    $prompt_msg = "We Detected Your City Ahemdabad!If Not then Enter Your City .";

    $city = prompt($prompt_msg);

 //$city="Anand";
    $_SESSION['tcity'] = $city;
    $t_city=$_SESSION['tcity'];

//$_SESSION['tcity']=$city;
    //$output_msg = "Hello there " . $city . "!";
    //echo($output_msg);

?>

    <!-- === BEGIN HEADER === -->
    <!DOCTYPE html>
    <!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
    <!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
    <!--[if !IE]><!-->
    <html lang="en">
    <!--<![endif]-->
    <head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>


        <!-- Title -->
        <title>Welcome to Pay & Park</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
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
<body onload="initialize()">

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
                              // if(is_null($_SESSION['tcity']))
                               //{
                                 //  $city="Anand";
                              //echo $city;
                               //}
//                                echo $_SESSION['tcity'];

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

                                    <a href="ParkingLotDisplay.php" class="fa-apple" >Live Mode</a>                         </li>

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


    <!-- === BEGIN CONTENT === -->
    <div id="content">
        <div class="container background-white">
            <div class="row margin-vert-40">
                <!-- Begin Sidebar Menu -->
<?php include "sidebar.php" ?>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="carousel slide testimonials" id="testimonials1">
                        <!-- Portfolio Item -->
                                   <!-- Filter Buttons -->
<?php /*



                <div class="col-md-12 portfolio-group no-padding">
                <!-- Portfolio Item -->
                <div class="col-md-4 portfolio-item margin-bottom-40 video">
                    <div>
                        <a href="#">
                            <figure>
                                <img src="assets/img/portfolio/image1.jpg" alt="image1">
                                <figcaption>
                                    <h3 class="margin-top-20">Velit esse molestie</h3>
                                    <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->

                <!-- Portfolio Item -->

                <div class="col-md-4 portfolio-item margin-bottom-40 design">
                    <div>
                        <a href="#">
                            <figure>
                                <img src="assets/img/portfolio/image2.jpg" alt="image2">
                                <figcaption>
                                    <h3 class="margin-top-20">Quam nunc putamus</h3>
                                    <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->
                <!-- Portfolio Item -->
                <div class="col-md-4 portfolio-item margin-bottom-40 audio">
                    <div>
                        <a href="#">
                            <figure>
                                <img src="assets/img/portfolio/image3.jpg" alt="image3">
                                <figcaption>
                                    <h3 class="margin-top-20">Placerat facer possim</h3>
                                    <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->
                <div class="col-md-9">
                    <div class="row">
                    <!-- Portfolio Item -->
              //  <div class="col-md-5 portfolio-item margin-bottom-40 design">
                    <div>
                        <a href="#">
                            <figure>
                                <img src="assets/img/portfolio/image4.jpg" alt="image4">
                                <figcaption>
                                    <h3 class="margin-top-20">Nam liber tempor</h3>
                                    <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->
                <!-- Portfolio Item -->
                <div class="col-md-5 portfolio-item margin-bottom-40 design">
                    <div>
                        <a href="#">
                            <figure>
                                <img src="assets/img/portfolio/image5.jpg" alt="image5">
                                <figcaption>
                                    <h3 class="margin-top-20">Donec non urna</h3>
                                    <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->
                <!-- Portfolio Item -->
                <div class="col-md-5 portfolio-item margin-bottom-40 code">
                    <div>
                        <a href="#">
                            <figure>
                                <img src="assets/img/portfolio/image6.jpg" alt="image6">
                                <figcaption>
                                    <h3 class="margin-top-20">Nullam consectetur</h3>
                                    <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->
                <!-- Portfolio Item -->
                <div class="col-md-5 portfolio-item margin-bottom-40 design">
                    <div>
                        <a href="#">
                            <figure>
                                <img src="assets/img/portfolio/image7.jpg" alt="image7">
                                <figcaption>
                                    <h3 class="margin-top-20">Velit esse molestie</h3>
                                    <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->
                <!-- Portfolio Item -->
                <div class="col-md-5 portfolio-item margin-bottom-40 code">
                    <div>
                        <a href="#">
                            <figure>
                                <img src="assets/img/portfolio/image8.jpg" alt="image8">
                                <figcaption>
                                    <h3 class="margin-top-20">Quam nunc putamus</h3>
                                    <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->
                <!-- Portfolio Item -->
                <div class="col-md-5 portfolio-item margin-bottom-40 video">
                    <div>
                        <a href="#">
                            <figure>
                                <img src="assets/img/portfolio/image9.jpg" alt="image9">
                                <figcaption>
                                    <h3 class="margin-top-20">Placerat facer possim</h3>
                                    <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->
            </div>
        </div>
    </div>
    </div>


*/ ?>
                                <section class="table-responsive">
                                    <?php

                                   $t_city = stripslashes($t_city);

                                    $n='ahemdabad';
                                    //$m=$n;
                                    echo $t_city;
                                   // $sql1 = "SELECT * FROM city WHERE cityname=$n";

                                    $sql1 = "SELEct * FROM city WHERE cityname='$n'  ";
                                    $result1 = mysqli_query($connection, $sql1);
                                    $count=mysqli_num_rows($result1);
                                    while($row1 = mysqli_fetch_assoc($result1)) {

                                                                    $cid=$row1['cityid'];
                                    }

                                    //while($row = mysqli_fetch_assoc($result))
                                    if ($count>=0){?>

                                    <!-- BEGIN EXAMPLE1 TABLE PORTLET-->
                                    <div class="card">
                                        <div class="card-header bg-white"><div class="animate fadeInRightBig"><div class="col-md-9 col-md-offset-2 col-sm-offset-3">

                                                    <h1  style="background: white" class="login-page"><i class="fa fa-table"> Available Parking In Your City</i></h1></div>
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
                                                            <th>Parking ID</th>
                                                            <th>City</th>
                                                            <th>Area </th>
                                                            <th>Parking Name</th>
                                                            <th>Address</th>
                                                            <th>Contat No</th>
                                                            <th>Total Slots</th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php

                                                        $sql = "SELEct * FROM city,area,addparking WHERE area.cityid=$cid  && addparking.areaid=area.areaid  && city.cityid=area.cityid";
                                                        $result = mysqli_query($connection, $sql);
                                                        while($row = mysqli_fetch_assoc($result)){


                                                            ?>
                                                            <tr>
                                                                <td><?php echo $row['pid']; ?></td>
                                                                <td><?php echo $row['cityname']; ?></td>
                                                                <td><?php echo $row['areaname']; ?></td>

                                                                <td><?php echo $row['name']; ?></td>
                                                                <td><?php echo $row['address']; ?></td>
                                                                <td><?php echo $row['contactno']; ?></td>

                                                                <td><?php echo $row['slots']; ?></td></tr>
                                                        <?php } ?>
                                                        </tbody>

                                                    </table></div>

                                                <?php } else { ?>
                                                <h1>Sorry You Dosen't Made Any Booking in Past.
                                                    We Hope We Are Able to serve you better</h1>
                                            </div>
                                        </div>
                                        <?php }?>












<?php include "footer2.php" ?>