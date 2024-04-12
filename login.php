<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page in HTML with CSS Code Example</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="assets/css/Loginstyle.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="box-form">

	<div class="left">
		<div class="overlay">
		<h1>Crafts Cove</h1>
		<p>Your best online shop for local crafts
		and printed shirts from up coming designers</p>
		<span>
			
		</span>
		</div>
	</div>
	
	
	<div class="right">
		<h5>Login</h5>
		<form id='loginform' action="login_user.php" method = 'POST'>
		<p>Don't have an account? <a href="#">Create Your Account</a> it takes less than a minute</p>
		<div class="inputs">
			<input type="text" placeholder="user name" name = "username">
			<br>
			<input type="password" placeholder="password" name = "password">
		</div>
			
		<br><br>
			
		<div class="remember-me--forget-password">
				<!-- Angular -->
			<label>
				<input type="checkbox" name="item" checked/>
				<span class="text-checkbox">Remember me</span>
			</label>
					<p>forget password?</p>
		</div>
		<button id=" " type='submit' form = "loginform" >Loogin</button>


</form>

		
			
		
		
	</div>
	
</div>
<!-- partial -->
  
</body>
</html>
