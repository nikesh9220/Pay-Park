<?php

require('inc\dbcon.php');
$city = $_GET["city"];

$select_city_id = "SELECT `cityid` FROM `city` WHERE `cityname` = '".$city."';";
$run_city_id = mysqli_query($connection, $select_city_id);
$id = $run_city_id->fetch_assoc();

//$id = mysql_result($run_city_id, 0) or die(mysqli_error());

$select_area = "SELECT `areaname` FROM `area` WHERE `cityid` = '".$id['cityid']."';";
$run_area = mysqli_query($connection, $select_area) or die(mysql_error());

echo '<select name="area" class="form-control">';
echo '<option value="" selected disabled hidden>Select your Area</option>';
while($area = mysqli_fetch_array($run_area)){
	echo '<option class="district_option" value="'.$area['areaname'].'">'.$area['areaname'].'</option>';
	}
echo '</select>';


?>