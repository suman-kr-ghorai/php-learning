<?php 
include('connection.php');
$editId= $_REQUEST['uid'];
$name= $_REQUEST['name'];
$email= $_REQUEST['email'];
$phone= $_REQUEST['phone'];
$sql= "UPDATE `user` SET `name`='$name',`email`='$email',`phone`='$phone' WHERE `user_id`='$editId'";
$data= mysqli_query($conn,$sql);
if($data)
{
	echo "<script>alert('Data Updated')</script>";
	echo "<script>window.location.href='display.php'</script>";
}
else
{
	echo "<script>alert('Data not updated')</script>";
	echo "<script>window.location.href='display.php'</script>";
}
?>