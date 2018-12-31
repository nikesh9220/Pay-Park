<?php
session_start();
include "lib/dao.php";
include "lib/model.php";

$d = new dao();
$m = new model();
extract($_POST);
extract($_GET);

/*insert category*/
if (isset($_POST['add_city'])) {

    $m->set_data('cityname',$cityname);

    $a = array(
        'cityname'=>$m->get_data('cityname'),

    );

    $q=$d->insert("city",$a);
    if($q>0){
        header("location:manageCity.php");
    } else{
        echo "Error";
    }

}
/* Update */
if (isset($_POST['update'])) {

    $m->set_data('cityname', $cityname);

    $a = array(
        'cityname' => $m->get_data('cityname'),

    );

    $q=$d->update("city",$a,"cityid='$cityid'");

    if ($q > 0) {
        header("location:manageCity.php");
    } else {
        echo "error";
    }

}


/*delete category*/

if (isset($_POST['delete_category'])) {

    $q=$d->delete("city","cityid='$city_id'");
    if($q>0){
        header("location:manageCity.php");
    } else{
        echo "Error";
    }

}
if (isset($_POST['editcity'])){

    $q=$d->select("city","cityid='$cityid' ");
    if($q>0) {
        header("location:editcity.php");
    }
    else{
        echo "error";

    }
}


?>