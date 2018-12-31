
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION["email"]))
{
    echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">";
}
include "header2.php";?>

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
									<p class="lead">The word actually explains itself: On-street parking means parking your vehicle on the street, anywhere on or along the curb of streets, in contrast to parking it in a parking garage. In some streets you can always park your vehicle on the street, but sometimes there are restrictions. Mostly these restrictions are presented on traffic signs. Sometimes you’re only allowed to park on one side of the street, and sometimes you’re not allowed to park your vehicle at all. There are also on-street parking situations where you need a parking permit to park. To make sure people follow  these rules and restrictions, cities hire enforcement officers.</p>




                <div class="col-md-12 portfolio-group no-padding">
                <!-- Portfolio Item -->
                
            </div>
        </div>
    </div>
    </div>
<?php include "footer2.php" ?>