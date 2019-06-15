<?php
$username=$_POST['user'];
$password=$_POST['pass'];


if($username=== 'harsh@gmail.com' && $password === '123')
{

header('location:addquestion.php');

}

else
{
echo"<script>alert('YOU ARE NOT ADMIN')</script>";
echo "<script>window.open('login1.php','_self')</script>";
}
?>