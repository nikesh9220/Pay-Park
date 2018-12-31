
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION["email"]))
{
    echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">";
}
include "header2.php";
?>

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
								   <div class="headline">
                                        <h2>Onstreet Parking</h2>
                                    </div>
									<p class="lead">Off-street parking means parking your vehicle anywhere but on the streets. These are usually parking facilities like garages and lots. Off-street parking can be both indoors and outdoors. Off-street parking also includes private lots, garages and driveways.</p>




                <div class="col-md-12 portfolio-group no-padding">
                <!-- Portfolio Item -->
                
            </div>
        </div>
    </div>
    </div>
<?php include "footer2.php" ?>