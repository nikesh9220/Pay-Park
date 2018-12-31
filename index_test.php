<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">

select {
    
 width: 300px;
    
}

</style>
<script src="jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxFile.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxFile.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>
</head>
<body>
<center>

                
    <div style='margin-top:50px;'>
	<img src="http://www.coderglass.com/images/logo.png"><br>
				<h4>Varun Singh's Tech Blog</h4>
				<h2>Country, State and City dropdown box using jquery in Php.</h2>
				<br>
	
    <?php
    //Include database configuration file
    include('dbcon.php');
    
    //Get all country data
    $query = "SELECT * FROM countries  ORDER BY country_name ASC";
    $run_query = mysqli_query($con, $query);
    //Count total number of rows
	$count = mysqli_num_rows($run_query);
    
    ?>
    <select name="country" id="country">
        <option value="">Select Country</option>
        <?php
        if($count > 0){
            while($row = mysqli_fetch_array($run_query)){
				$country_id=$row['country_id'];
				$country_name=$row['country_name'];
                echo "<option value='$country_id'>$country_name</option>";
            }
        }else{
            echo '<option value="">Country not available</option>';
        }
        ?>
    </select><br><br>
    
    <select name="state" id="state">
        <option value="">Select country first</option>
    </select>
	<br><br>
    
    <select name="city" id="city">
        <option value="">Select state first</option>
    </select>
    </div>
	</center>
</body>
</html>


