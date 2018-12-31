<?php
//Include database configuration file
include('dbcon.php');

if(isset($_POST["city_id"])){
    //Get all state data
	$country_id= $_POST['city_id'];
    $query = "SELECT * FROM city WHERE city_id = '$country_id' 
	ORDER BY city_name ASC";
	$run_query = mysqli_query($con, $query);
    
    //Count total number of rows
    $count = mysqli_num_rows($run_query);
    
    //Display states list
    if($count > 0){
        echo '<option value="">Select Area</option>';
        while($row = mysqli_fetch_array($run_query)){
		$area_id=$row['city_id'];
		$area_name=$row['areaname'];
        echo "<option value='$area_id'>$area_name</option>";
        }
    }else{
        echo '<option value="">A available</option>';
    }
}

if(isset($_POST["state_id"])){
	$state_id= $_POST['state_id'];
    //Get all city data
    $query = "SELECT * FROM cities WHERE state_id = '$state_id' 
	ORDER BY city_name ASC";
    $run_query = mysqli_query($con, $query);
    //Count total number of rows
    $count = mysqli_num_rows($run_query);
    
    //Display cities list
    if($count > 0){
        echo '<option value="">Select city</option>';
        while($row = mysqli_fetch_array($run_query)){
		$city_id=$row['city_id'];
		$city_name=$row['city_name']; 
        echo "<option value='$city_id'>$city_name</option>";
        }
    }else{
        echo '<option value="">City not available</option>';
    }
}
?>