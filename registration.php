<?php

session_start();
header('location:LOGIN1.php');

$con = mysqli_connect('localhost','root');
	if($con)
	{
		echo "connection";
	}

	mysqli_select_db($con,'data');


	$username = $_POST['user'];
	$password = $_POST['pass'];
	$email=$_POST['mail'];

	 

	$check = "select * from login where email='$username' && password='$password' ";
	$resultcheck = mysqli_query($con,$check);	

	 $row = mysqli_num_rows($resultcheck);
			if($row == 1){
			echo"<script>alert('email or username is already exit in our database ')</script>";
				
			}	else{

	$q = "insert into login(username,password,email) values('$username', '$password','$email')" ;

				$result = mysqli_query($con,$q);
				

			}



?>

 
