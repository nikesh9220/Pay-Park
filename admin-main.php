<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<?php
/**
 * Created by PhpStorm.
 * User: Si
 * Date: 2/13/2018
 * Time: 10:48 AM
 */
 include "adminheader.php"
?>



    <!-- === BEGIN CONTENT === -->
    <div id="content">
        <div class="container background-white">
            <div class="row margin-vert-30">
                <div class="col-md-12">
                    <h2>Our Service Available at Following Locations</h2>
                    <!-- Filter Buttons -->
                    <!-- End Filter Buttons -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 portfolio-group no-padding">
                    <!-- Portfolio Item -->
                    <div class="col-md-4 portfolio-item margin-bottom-40 video">
                        <div>
                            <a href="city.php">
                                <figure>
                                    <img src="img\portfolio\image1.jpg" alt="image1">
                                    <figcaption>
                                        <h3 class="margin-top-20">CITYTABLE</h3>
                                        <span>ALTER DATA</span>
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
                    <!-- Portfolio Item -->
                    <div class="col-md-4 portfolio-item margin-bottom-40 design">
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
                    <div class="col-md-4 portfolio-item margin-bottom-40 design">
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
                    <div class="col-md-4 portfolio-item margin-bottom-40 code">
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
                    <div class="col-md-4 portfolio-item margin-bottom-40 design">
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
                    <div class="col-md-4 portfolio-item margin-bottom-40 code">
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
                    <div class="col-md-4 portfolio-item margin-bottom-40 video">
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
    <!-- === END CONTENT === -->

<?php
include "footer2.php" ?>