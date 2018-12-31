

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
                                    <?php
                                    $i=1;

                                    $n=$_POST['areaid'];
                                    $q=$d->select("city,area","areaid=$n && area.cityid=city.cityid","");
                                    while ($data=mysqli_fetch_array($q)) {
                                    ?>

                                    <div class="col-lg-4">
                                        <input type="text" id="required2" name="areaname"
                                               class="form-control"
                                              value="<?php echo $data['areaname']; ?> "required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="email2" class="form-control-label">City Name*</label>
                                    </div>
                                    <div class="col-lg-4">

                                        <input type="text" class="form-control" id="textArea" name="city_name" value="<?php echo $data['cityname'];  ?>" required></input>

                                    </div>
                                </div>
                                <div class="form-actions form-group row">
                                    <div class="col-lg-4 push-lg-4">
                                        <input type="hidden" name="area_id" value="<?php echo $data['areaid']; } ?>">


                                        <button type="submit"
                                                name="update_area" class="btn btn-primary" value="Validate" >Update Area</button>

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