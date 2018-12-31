
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
								   
									<div class="col-md-5 portfolio-item margin-bottom-20 video">
										<img src="assets/img/portfolio/payumoney-logo.png" height="400px"alt="image1">
						
									</div>
									
									<p class="lead col-md-7 portfolio-item margin-bottom-20 video">Whether you are a service provider, online store, exciting startup or growing market place, we enable businesses of all sizes across India to accept mobile and online payments with minimum development effort.
									<br>Get your account setup within minutes with minimal information. Our process is designed to provide you complete online onboarding experience without the need of physical documentation.
									<br>All your transactions are secured with 128 bit SSL encryption and two factor authentication. We apply 100+ risk rules for each payment so you can focus on your business and rely on us for data security.</p>




                <div class="col-md-12 portfolio-group no-padding">
                <!-- Portfolio Item -->
                
            </div>
        </div>
    </div>
    </div>
<?php include "footer2.php" ?>