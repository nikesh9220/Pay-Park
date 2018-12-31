

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

                            <form action="citycontroller.php" method="post">
                            <div class="form-group row">
                                    <div class="col-lg-4  text-lg-right">
                                        <label for="required2" class="form-control-label">City Name *</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <?php
                                        $i=1;

                                        $n=$_POST['cityid'];
                                        $q=$d->select("city","cityid=$n ","");
                                        while ($data=mysqli_fetch_array($q)) {
                                        ?>

                                        <input type="text" id="required2" name="cityname" value="<?php echo $data['cityname']; ?>"
                                               class="form-control"
                                               placeholder="Category Name" required>
                                    </div>
                                </div>
                                <div class="form-actions form-group row">
                                    <div class="col-lg-4 push-lg-4">


                                <input type="hidden" name="cityid" value="<?php echo $data['cityid']; } ?>">
                                <button  class="btn btn-primary"
                                         name="update">Update</button>
                            </form>
                                    </div>
                                </div>

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