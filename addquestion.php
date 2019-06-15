<!DOCTYPE html>
<html>
<head>
	<title>ADD QUESTION</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	 <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">

</head>
<body background="a.jpg">

<div class="container">
		<center>
		<h1 class="text-center">ADD QUESTIONS WITH OPTION</h1><br>

		<div class="row" align="center">

<div class="col-lg-6">
				<div class="card">
					<h4 class="card-header text-center">ADD QUESTION</h4>
					<br>
					<form action="adminlogin.php" method="post">
						
						<div class="form-group">
							<label for="user "> QUESTION: </label>
							<input type="text" name="user" id="user" class="form-control">
						</div>
						<div class="form-group">
							<label for="pass "> OPTION 1: </label>
							<input type="TEXT" name="option1" id="pass" class="form-control">
						</div>
						<div class="form-group">
							<label for="pass "> OPTION 2: </label>
							<input type="TEXT" name="option2" id="pass" class="form-control">
						</div>
						<div class="form-group">
							<label for="pass "> OPTION 3: </label>
							<input type="TEXT" name="option3" id="pass" class="form-control">
						</div>
						<div class="form-group">
							<label for="pass "> OPTION 4: </label>
							<input type="TEXT" name="option4" id="pass" class="form-control">
						</div>
						<div class="form-group">
							<label for="pass "> correct answer: </label>
							<input type="TEXT" name="ans" id="pass" class="form-control">
						</div>
						<button class="btn btn-success d-block m-auto" type="submit" name="login">ADD</button>
						<div class="duplicate"> </div>
					</form>

				</div>
			</div>




</body>
</html>