<?php 
session_start();
include "lib/dao.php";
include "lib/model.php";

$d = new dao();
$m = new model();
extract($_POST);
extract($_GET);
/* Update */
if (isset($_POST['update_parking'])) {

    $m->set_data('parkingname', $parking_name);
    $m->set_data('parkingaddress',$parking_address);
    $m->set_data('areaid',$area_id);
  //  $m->set_data('area_name',$area_name);
    $m->set_data('contactno',$contactno);
    $m->set_data('slots',$slots);
   $n= $_POST["area_name"];
$q=$d->select("area","areaname='$n' ","");
while ($o=mysqli_fetch_array($q)) {

    $aid=$o[areaid];
}




$a = array(
        'name' => $m->get_data('parkingname'),

        'address' => $m->get_data('parkingaddress'),

        'areaid' => $aid,

        'contactno' => $m->get_data('contactno'),


    'slots' => $m->get_data('slots'),

);

    $q=$d->update("addparking",$a,"pid='$pid'");

    if ($q > 0) {
        header("location:manageCategory.php");
    } else {
        echo "error";
    }

}




/*insert category*/
if (isset($_POST['add_category'])) {

    $m->set_data('name',$category_name);
	$m->set_data('address',$category_description);

	$m->set_data('areaid',$areaid);
	$m->set_data('contactno',$contactno);

    $m->set_data('slots',$slots);

    $n= $_POST["areaname"];
    $q=$d->select("area","areaname='$n' ","");
    while ($o=mysqli_fetch_array($q)) {

        $aid=$o[areaid];
    }

	
	$a = array(
		'name'=>$m->get_data('name'),
		'address'=>$m->get_data('address'),
		
		//'areaid'=>$m->get_data('areaid'),
	    areaid=>$aid,
		'contactno'=>$m->get_data('contactno'),

        'slots' => $m->get_data('slots'),

    );

	$q=$d->insert("addparking",$a);
	if($q>0){
		header("location:manageCategory.php");
	} else{
		echo "Error";
	}

}

/*delete category*/

if (isset($_POST['delete_category'])) {
	
	$q=$d->delete("addparking","pid='$cat_id'");
	if($q>0){
		header("location:manageCategory.php");
	} else{
		echo "Error";
	}

}

 ?>