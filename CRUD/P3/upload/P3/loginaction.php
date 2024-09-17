<?php 
session_start();
include('connection.php');
$email= $_REQUEST['email'];
$password= md5($_REQUEST['password']);
//echo $email, $password;
$sql= "SELECT * FROM `user` where `email`='$email' and `password`='$password' and `auth`=0";
$data= mysqli_query($conn,$sql);
$total= mysqli_num_rows($data);
$result= mysqli_fetch_assoc($data);
// print_r($result);
// die();
if($total)
{
	//echo "login success";
	$_SESSION['id']= $result['user_id'];
	$_SESSION['user_type']=$result['user_type'];
	$_SESSION['auth']=$result['auth'];
	header("location:display.php");
}
else
{ echo "<script>alert('Login-Failure')</script>";
	echo "login failure";
}
?>