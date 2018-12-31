

<?php
	require('inc\dbcon.php');
    // If the values are posted, insert them into the database
    if (isset($_POST['name']) && isset($_POST['password'])){
        $name = $_POST['name'];
		$email = $_POST['email'];
        $password = $_POST['password'];
		$cpassword =$_POST['cpassword'];
		$phone = $_POST['phone'];
	//check existence
	$sql="SELECT * FROM users WHERE email='$email'";
	$result=mysqli_query($connection,$sql);
	//password matching
		// Mysql_num_row is counting table row
	$count=mysqli_num_rows($result);

	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1){
	echo "<script type='text/javascript'>alert(\"User Exist\")</script>";
	echo "<script type='text/javascript'>window.location.href='login.php';</script>";
   
		exit;
		
	}
	else if($password!=$cpassword)
	{
		echo "<script type='text/javascript'>alert(\"Password does not match\")</script>";
		echo "<script type='text/javascript'>window.location.href='signup.php';</script>";
	}
	
	else
	{
	$jdate=getdate();
	$status="Active";
	    $p=md5($password);

        $query = "INSERT INTO `users` (name, password, email,phone,joindate,status) VALUES ('$name', '$p', '$email', '$phone', '$jdate', '$status')";
        $result = mysqli_query($connection,$query);
        if($result){
           //REDIRECT
		   header('location:login.php');
exit;
        }
    }
	}
    ?>