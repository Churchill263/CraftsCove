<?php
	session_start();

	include("db.php");

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$first_name = $_POST['fname'];
		$last_name = $_POST['lname'];
		$user_name = $_POST['uname'];
		$email = $_POST['mail'];
		$gender = $_POST['gender'];
		$password = $_POST['pass'];

		if(!empty($email) && !empty($password))
		{
			$query = "INSERT INTO customer (first_name, last_name, user_name, email, gender, password) VALUES ('$first_name', '$last_name', '$user_name', '$email', '$gender', '$password')";

			mysqli_query($conn, $query);

			echo "<script type='text/javascript'> alert('Successfully Registered');</script>";
		}
		else
		{
			echo "<script type='text/javascript'> alert('Please go through again and enter valid info');</script>";
		}

	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v1 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="assets/css/style.scss">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('assets/images/bg-registration-form-1.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="assets/images/Africa.jpg" alt="">
				</div>
				<form name="registrationForm" action="" method="post">
					<h3>Registration Form</h3>
					<div class="form-group">
						<input type="text" placeholder="First Name" name="fname" class="form-control">
						<input type="text" placeholder="Last Name" name="lname" class="form-control">
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Username" name="uname" class="form-control">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Email Address" name="mail" class="form-control">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<select id="" class="form-control" name="gender">
							<option value="" disabled selected>Gender</option>
							<option value="male">Male</option>
							<option value="femal">Female</option>
							<option value="other">Other</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Password" name="pass" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					
					<button type="submit">Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
