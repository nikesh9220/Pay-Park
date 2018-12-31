<?php
require('inc\dbcon.php');?>
<?php
include "header2.php"
?>
<!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Register Box -->
                        <div class="col-md-12">
                            <form class="signup-page" action="show_reserv_data.php"  method="post">
								<div class="signup-header">
                                    <h2>Select Your Place For Parking</h2>
									<p>Select your near by area</p>
									<div class="row">
										<div class="col-sm-2 col-md-offset-3 col-sm-offset-3 ">
											
											<select name="city" class="form-control" onChange="getArea(this.value)">
												<option value="" selected disabled hidden>Select your city</option>
													<?php 
														
														$sql = mysqli_query($connection, "SELECT cityname,cityid FROM city");
														while ($row = $sql->fetch_assoc()){
														echo "<option select='selected' >" . $row['cityname'] . "</option>";
														}	
													?>
											</select>
										</div>
										<div class="col-sm-2 col-md-offset-3 col-sm-offset-3" id="areaSelectInput">
											<select name="area" class="form-control">
												<option value="" selected disabled hidden>Select your Area</option>
													<?php 
														/*$qwe=mysqli_query($connection, "SELECT areaid,areaname FROM area");
														$sql1 = mysqli_query($connection, "SELECT areaname FROM area ");
														while ($row = $sql1->fetch_assoc()){
														echo "<option select='selected' >" . $row['areaname'] . "</option>";
														}	
													*/?>
											</select>
										</div>	
										
										<div class="row">
											<div class="col-lg-12">
												<hr>
											</div>
										</div>
											<div class="col-lg-7 text-center">
												<input type="submit" class="btn btn-primary pull-right" id="LogIn" value="Search" ></input>
											</div>
												<div class="row">
													<div class="col-lg-12">
													<hr>
												</div>
												<div class="col-sm-12">
													
												</div>
										</div>
										</div>
									</div>	
								</div>
                            </form>
                        </div>
                        <!-- End Register Box -->
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
          <?php
 include "footer2.php" ?>
 <script src="fetchingArea.js" type="text/javascript"></script>