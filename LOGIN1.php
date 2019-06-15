
<?php 

	$con = mysqli_connect('localhost','root');
	

	mysqli_select_db($con,'data');

?>





<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	 <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
<!-- 
	 font-family: 'Montserrat', sans-serif; 
	font-family: 'Open Sans', sans-serif;
	-->

</head>

<body background="a.jpg">
	
	<div class="container">
		<center>
		<h1 class="text-center">LOGIN FORM</h1><br>

		<div class="row" align="center">
			
			<div class="col-lg-6">
				<div class="card">
					<h4 class="card-header text-center">USER LOGIN</h4>
					<br>
					<form action="login.php" method="post">
						<div class="form-group">
							<label for="user "> USERNAME: </label>
							<input type="text" name="user" id="user" class="form-control">
						</div>
						<div class="form-group">
							<label for="pass "> PASSWORD: </label>
							<input type="password" name="pass" id="pass" class="form-control">
						</div>
						<button class="btn btn-success d-block m-auto" type="submit" name="login">LOGIN </button>
					</form>
				
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card">
					<h4 class="card-header text-center">ADMIN LOGIN</h4>
					<br>
					<form action="adminlogin.php" method="post">
						
						<div class="form-group">
							<label for="user "> USERNAME: </label>
							<input type="text" name="user" id="user" class="form-control">
						</div>
						<div class="form-group">
							<label for="pass "> PASSWORD: </label>
							<input type="password" name="pass" id="pass" class="form-control">
						</div>
						<button class="btn btn-success d-block m-auto" type="submit" name="login">LOGIN</button>
						<div class="duplicate"> </div>
					</form>

				</div>
			</div>

			</div>
				</div>
			

		</div>
</center>
	</div>

</body>
</html>