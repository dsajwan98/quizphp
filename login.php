<?php
session_start();


$con = mysqli_connect('localhost','root');

	mysqli_select_db($con,'data');

if(isset($_POST['login']))
{
	$username = $_POST['user'];
	$password = $_POST['pass'];

$q = " select * from login where email= '$username' && password='$password' ";

$result = mysqli_query($con,$q);

$row = mysqli_num_rows($result);

if($row == 1){
	
echo"<script>window.open('home.php','_self')</script>";
$_SESSION['username'] = $username;	
}else{
echo"<script>alert('username or password is incorrect')</script>";
echo "<script>window.open('login1.php','_self')</script>";
}
}
?>