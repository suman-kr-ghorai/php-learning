<?php  
include('connection.php');
$del_id= $_REQUEST['del'];
$sql= "DELETE FROM `user` where `user_id`='$del_id'";
$data= mysqli_query($conn,$sql);
if($data)
{
	echo "<script>alert('Data Deleted')</script>";
	echo "<script>window.location.href='display.php'</script>";
}
else
{
	echo "<script>alert('not deleted')</script>";
	echo "<script>window.location.href='display.php'</script>";
}
?>