<?php
	require('inc\dbcon.php');
	
	
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$reason = $_POST['reason'];
		$desc = $_POST['desc'];
		$query = "INSERT INTO `contact` (name,email,phone,reason,description) VALUES ('$name','$email', '$phone', '$reason', '$desc')";
        $result = mysqli_query($connection,$query);
		if($result){
           //REDIRECT
		   header('location:login.php');
			exit;
        }
	?>