<?php 
session_start();
include('connection.php');
$email= $_REQUEST['email'];
$password= md5($_REQUEST['password']);
//echo $email, $password;
$sql= "SELECT * FROM `user` where `email`='$email' and `password`='$password' and `auth`=0";
$data= $conn->query($sql);
// $total= mysqli_num_rows($data);if($conn->affected_rows>0)
$result= $data->fetch_assoc();
// print_r($result);
// die();
if($result)
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