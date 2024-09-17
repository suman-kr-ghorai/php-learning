<?php 
include('connection.php');
$name= $_REQUEST['name'];
$email= $_REQUEST['email'];
$password= md5($_REQUEST['password']);
$phone= $_REQUEST['phone'];
$gender= $_REQUEST['gender'];
$degree= $_REQUEST['degree'];
$language= implode(',', $_REQUEST['lang']);
//echo $name,$email,$password,$phone;
$check_email= "SELECT email from user where email='$email'";
$emailsql= mysqli_query($conn,$check_email);
$existEmail= mysqli_num_rows($emailsql);
if($existEmail)
{
	//echo "Email id already exist";
	echo "<script>alert('Email id already exist')</script>";
	echo "<script>window.location.href='form.php'</script>";
}
else{

$sql= "INSERT INTO `user`(`user_id`, `name`, `email`, `password`, `phone`, `gender`, `degree`, `language`) VALUES ('','$name','$email','$password','$phone','$gender','$degree','$language')";
$data= mysqli_query($conn,$sql);
if($data)
{
	//echo "Data inserted";
	header("location:login.php");
}
else
{
	echo "Not inserted";
}
}
?>