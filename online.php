
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
									<p class="lead">Make it easy for your customers to reserve a parking space online. Sell long-term parking tickets conveniently online. Another benefit, e.g., for business parks with employee parking: The companies can independently manage long-term parking tickets for employees.

Regardless whether short-term or long-term parker: Offer your business and private customers these services.<br> Our online booking system helps customers to easily plan trips in the long run. Thanks to Interparking France, you can choose bookings for a period of 2, 3, 5, 14 or 30 days- depending on what suits you best.

Your booking enables you to enter and exit the car park as much as you want throughout the defined period. Thus, whether you are looking for a place to park your car over a defined period or you wish to enter and exit the car park whenever you want</p>




                <div class="col-md-12 portfolio-group no-padding">
                <!-- Portfolio Item -->
                
            </div>
        </div>
    </div>
    </div>
<?php include "footer2.php" ?>