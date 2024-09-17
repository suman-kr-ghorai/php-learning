<?php 
session_start();
include('connection.php');
$editId= $_REQUEST['uid'];
$name= $_REQUEST['name'];
$email= $_REQUEST['email'];
$phone= $_REQUEST['phone'];
$gender= $_REQUEST['gender'];
$degree= $_REQUEST['degree'];
$language= implode(',', $_REQUEST['lang']);
$filename= $_FILES['image']['name'];
$tempname= $_FILES['image']['tmp_name'];
$folder= 'upload/'.$filename;
move_uploaded_file($tempname, $folder);
$oldimg= $_SESSION['oldimg'];


if($folder=='upload/')
{
	$sql= "UPDATE `user` SET `name`='$name',`email`='$email',`phone`='$phone',`gender`='$gender',`degree`='$degree',`language`='$language',`image`='$oldimg' WHERE `user_id`='$editId'";
	$data= $conn->query($sql);
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
}
else
{
	$sql= "UPDATE `user` SET `name`='$name',`email`='$email',`phone`='$phone',`gender`='$gender',`degree`='$degree',`language`='$language',`image`='$folder' WHERE `user_id`='$editId'";
	$data= $conn->query($sql);
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
}
?>