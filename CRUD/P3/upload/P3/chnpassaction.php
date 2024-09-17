<?php  
session_start();
include('connection.php');
$uid= $_SESSION['id'];
$oldp= md5($_REQUEST['oldp']);
$newp= md5($_REQUEST['newp']);
$confp= md5($_REQUEST['confp']);
$sql= "SELECT password FROM user where user_id='$uid'";
$data= mysqli_query($conn,$sql);
$result= mysqli_fetch_assoc($data);
$dbpass= $result['password'];
//print_r($result);
if($dbpass==$oldp)
{
	if($oldp!=$newp)
	{
		if($newp==$confp)
		{
			$chnpass= "UPDATE `user` SET `password`='$confp' WHERE user_id='$uid'";
			$qry= mysqli_query($conn,$chnpass);
			if($qry)
			{
				echo "<script>alert('Password Updated')</script>";
				echo "<script>window.location.href='display.php'</script>";
			}
		}
		else
		{
			echo "<script>alert('New password and Confirm password are not same')</script>";
			echo "<script>window.location.href='chnpass.php'</script>";
		}
	}
	else
	{
		echo "<script>alert('New password and old password are  same')</script>";
		echo "<script>window.location.href='chnpass.php'</script>";
	}
}
else
{
	echo "<script>alert('Database password and old password are not same')</script>";
	echo "<script>window.location.href='chnpass.php'</script>";
}
?>