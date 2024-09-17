<?php  
session_start();
include('connection.php');
$auth=$_SESSION['auth'];
$block_id= $_REQUEST['bId'];
$sql= "UPDATE `user` SET `auth` = 0 WHERE `user_id` = '$block_id';";
$data= mysqli_query($conn,$sql);
if($data)
{
	echo "<script>alert('User Un-Blocked')</script>";
	echo "<script>window.location.href='display.php'</script>";
}
else
{
	echo "<script>alert('not Un-blocked')</script>";
	echo "<script>window.location.href='display.php'</script>";
}








?>