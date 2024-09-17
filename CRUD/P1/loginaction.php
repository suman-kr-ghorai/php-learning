<?php 
include('connection.php');
$email= $_REQUEST['email'];
$password= md5($_REQUEST['password']);
//echo $email, $password;
$sql= "SELECT * FROM `user` where `email`='$email' and `password`='$password'";
$data= mysqli_query($conn,$sql);
$total= mysqli_num_rows($data);
if($total)
{
	//echo "login success";
	header("location:display.php");
}
else
{
	echo "login failure";
}
?>