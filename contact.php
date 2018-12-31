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
 include "header.php"
?>
<div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Register Box -->
                        <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                            <form class="signup-page" action="process-contact-us.php" method="post">
                                <div class="signup-header">
                                    <h2>CONTACT US</h2>
                                    
                                </div>
								
								<label>FullName
									<span class="color-red">*</span>
								</label>
									<input type="text" id="FullName" name="name"  maxlength="31" class="form-control margin-bottom-20"  required />
									<label>Email Address
                                    <span class="color-red">*</span>
                                </label>
                                <input class="form-control margin-bottom-20" id="Email" name="email" required pattern="/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/" type="email" / >
                                <label>Phone Number
                                    <span class="color-red">*</span>
                                </label>
								<input type="text" id="Phone" name="phone"  maxlength="10" class="form-control margin-bottom-20" required pattern="(\+?\d[- .]*){7,13}" required />
								<label>Reason
                                    <span class="color-red">*</span>
                                </label>
								<input type="text" id="reason" name="reason"   class="form-control margin-bottom-20" required />
								<label>Description
                                    <span class="color-red">*</span>
                                </label>
								<textarea maxlength="50" id="desc" name="desc" class="form-control margin-bottom-20" required /></textarea>
                                <hr>
                                <div class="row">
                                    
                                    <div class="col-lg-7">
                                        <input type="submit" class="btn btn-primary pull-right"   id="LogIn" value="Submit" onclick="Validate()"></input>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End Register Box -->
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
<?php include "footer2.php" ?>