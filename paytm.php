
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION["email"]))
{
    echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">";
}include "header2.php";
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
								   
									<div class="col-md-5 portfolio-item margin-bottom-20 video">
										<img src="assets/img/portfolio/Paytm_logo.png" height="300px"alt="image1">
						
									</div>
									
									<p class="lead col-md-7 portfolio-item margin-bottom-20 video">Paytm is an Indian e-payments and e-commerce brand based out of Delhi NCR, India. Launched in August 2010, it is a consumer brand of parent company One97 Communications. The name is an acronym for "Payment Through Mobile".

The company employs over 13,000 employees as of January 2017 and has 3 million offline merchants across India. It also operates the Paytm payment gateway and the Paytm Wallet.</p>




                <div class="col-md-12 portfolio-group no-padding">
                <!-- Portfolio Item -->
                
            </div>
        </div>
    </div>
    </div>
<?php include "footer2.php" ?>