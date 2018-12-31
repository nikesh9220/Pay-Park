<?php include"common/header.php"; ?>
    <!-- /#top -->
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

                    <div class="inner bg-light lter bg-container">
                        <div class="row">
                            <div class="col-xs-12 data_tables">
                                <!-- BEGIN EXAMPLE1 TABLE PORTLET-->
                                <div class="card">
                                    <div class="card-header bg-white">
                                        <i class="fa fa-table"></i> Datatable with Table Tools
                                    </div>
                                    <div class="card-block p-t-25">
                                        <div class="">
                                            <div class="pull-sm-right">
                                                <div class="tools pull-sm-right"></div>
                                            </div>
                                        </div>
                                        <table class="table table-striped table-bordered table-hover" id="sample_1">

                                           <thead>
                                                <tr>
                                                    <th>Parking ID</th>
                                                    <th>Parking name</th>
                                                    <th>address</th>
                                                    <th>area</th>
                                                    <th>Slots</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </thead>
                                                <tbody>
                                         <?php
                                        $i=1; 
                                        $q=$d->select("addparking,area","addparking.areaid=area.areaid","");
                                        while ($data=mysqli_fetch_array($q)) {
                                         ?>   
                                         <tr>
                                               <td><?php echo $i++; ?></td>
                                                <td><?php echo $data['name']; ?></td>
                                                <td><?php echo $data['address']; ?></td>
                                             <td><?php echo $data['areaname']; ?></td>
                                             <td><?php echo $data['slots']; ?></td>


                                             <td class="center" style="width: 150px">
                                              
                                                <form style="float: left; margin-right: 3px;" action="controller.php" method="post">
                                                <input type="hidden" name="cat_id" value="<?php echo $data['pid']; ?>">
                                                    <button class="btn btn-danger" 
                                                    name="delete_category">Delete</button></form>

                                                <form action="edit_parking.php" method="post">
                                                 <input type="hidden" name="pid" value="<?php echo $data['pid']; ?>">
                                                     <button  class="btn btn-primary" 
                                                     name="edit_category">Edit</button>
                                                </form>
                                                </td>
                                            </tr>
                                                <?php } ?>
                                                </tbody>

                                        </table>
                                    </div>
                                </div>
                                <!-- END EXAMPLE1 TABLE PORTLET-->
                             </div>
                        </div>
                    </div>
                    <!-- /.inner -->
                </div>
                <!-- /.outer -->
            </div>
            <!-- /#content -->
        </div>
    </div>
    <!--wrapper-->
    <?php include "common/footer.php"; ?>