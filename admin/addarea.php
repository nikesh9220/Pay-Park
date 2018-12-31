

<?php include"common/header.php"; ?>
<!-- /#top -->
<? require "lib/dbconnect.php"; ?>
<?php include"common/sidebar.php"; ?>
<div id="content" class="bg-container">
    <header class="head">
        <div class="main-bar row">
            <div class="col-xs-6">
                <h4 class="m-t-5">
                    <i class="fa fa-home"></i>
                    Dashboard
                </h4>
            </div>
        </div>
    </header>
    <div class="outer">

        <div class="inner bg-container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header bg-white">
                            <i class="fa fa-file-text-o"></i>
                            Block Validation
                        </div>
                        <div class="card-block m-t-35">
                            <form method="post"
                                  action="areacontroller.php" class="form-horizontal  login_validator" id="form_block_validator">
                                <div class="form-group row">
                                    <div class="col-lg-4  text-lg-right">
                                        <label for="required2" class="form-control-label">Area Name *</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" id="required2" name="area_name"
                                               class="form-control"
                                               placeholder="Area Name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="email2" class="form-control-label">City Name*</label>
                                    </div>
                                    <div class="col-lg-4">

                                        <input type="text" class="form-control" id="textArea" name="city_name" placeholder="City Name" required></input>

                                    </div>
                                </div>
                                <div class="form-actions form-group row">
                                    <div class="col-lg-4 push-lg-4">

                                        <button type="submit"
                                                name="add_area" class="btn btn-primary" value="Validate" >Add Area</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->


        </div>
    </div>
    <!-- /.outer -->
</div>
<!-- /#content -->
</div>
</div>
<!--wrapper-->
<?php include "common/footer.php"; ?>