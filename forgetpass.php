<?php
include "header.php" ?><!-- === BEGIN CONTENT === -->
<div id="content">
    <div class="container background-white">
        <div class="container">
            <div class="row margin-vert-30">
                <!-- Login Box -->
                <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                    <form action="process-forgot.php" method="post" class="login-page">
                        <div class="login-header margin-bottom-30">
                            <h2>Forget Password</h2>
                        </div>
                        <div class="input-group margin-bottom-20">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                            <input type="email" id="email" name="email" placeholder="Enter your Email id" class="form-control"  required pattern="/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/">
                        </div>
                       
                        <div class="row">
                            
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-primary pull-right"  id="Forget" value="Send Mail"></input>
                            </div>
                        </div>
                        
                    </form>
                </div>
                <!-- End Login Box -->
            </div>
        </div>
    </div>
</div>
<!-- === END CONTENT === -->
<?php
 include "footer2.php" ?>