<?php
session_start();
include('connection.php');
$user_id=$_SESSION['id'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$sql="INSERT INTO `subscriptions` (`user_id`,`name`,`email`,`registered`) VALUES ('$user_id','$name','$email',1)";
$data= mysqli_query($conn,$sql);
echo "REGISTERED";
header('location:login.php');

?>
