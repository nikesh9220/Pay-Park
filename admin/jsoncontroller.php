<?php 
session_start();
include "lib/dao.php";
include "lib/model.php";

$d = new dao();
$m = new model();
extract($_POST);
extract($_GET);

/*insert category*/
$response = array();
if (isset($_POST['add_category'])) {

    $m->set_data('category_name',$category_name);
	$m->set_data('category_description',$category_description);

	$a = array(
		'category_name'=>$m->get_data('category_name'),
		'category_description'=>$m->get_data('category_description'),
	
	);

	$q=$d->insert("categories",$a);
	if($q>0){
		 $response["success"] = 1;
		 $response["message"] = "Category Added.";
		 echo json_encode($response);
	} else{
		 $response["success"] = 0;
		 $response["message"] = "Error .";
         echo json_encode($response);
	}

}


 ?>