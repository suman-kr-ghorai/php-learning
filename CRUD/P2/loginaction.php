<?php 
session_start();
include('connection.php');
$email= $_REQUEST['email'];
$password= md5($_REQUEST['password']);
//echo $email, $password;
$sql= "SELECT * FROM `user` where `email`='$email' and `password`='$password'";
$data= mysqli_query($conn,$sql);
$total= mysqli_num_rows($data);
$result= mysqli_fetch_assoc($data);
// print_r($result);
// die();
if($total)
{
	//echo "login success";
	$_SESSION['id']= $result['user_id'];
	header("location:display.php");
}
else
{
	echo "login failure";
}
?>