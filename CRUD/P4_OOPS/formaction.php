<?php 
include('connection.php');
$name= $_REQUEST['name'];
$email= $_REQUEST['email'];
$password= md5($_REQUEST['password']);
$phone= $_REQUEST['phone'];
$gender= $_REQUEST['gender'];
$degree= $_REQUEST['degree'];
$language= implode(',', $_REQUEST['lang']);
$filename= $_FILES['image']['name'];
$tempname= $_FILES['image']['tmp_name'];
$folder= 'upload/'.$filename;
move_uploaded_file($tempname, $folder);
//echo $name,$email,$password,$phone;


$check_email= "SELECT email from user where email='$email'";
$emailsql= $conn->query($check_email);
$existEmail= $emailsql->fetch_assoc();
if($existEmail)
{
	//echo "Email id already exist";
	echo "<script>alert('Email id already exist')</script>";
	echo "<script>window.location.href='form.php'</script>";
}
else{

$sql= "INSERT INTO `user`(`user_id`, `name`, `email`, `password`, `phone`, `gender`, `degree`, `language`, `image`) VALUES ('','$name','$email','$password','$phone','$gender','$degree','$language','$folder')";
$data=$conn->query($sql);
                                                                                                                                 // if ($conn->query($sql) === TRUE) {
// echo "<script>alert('Inserted')<?script>";
// header("location:login.php");
if($data)
{
	// //echo "Data inserted";
	// echo "<script>alert('Inserted')</script>";
	// header("location:login.php");
	echo "<script>alert('Inserted')</script>";
echo "<script>window.location.href='login.php'</script>";
}
else
{
	echo "Not inserted";
}
}




// $data= mysqli_query($conn,$sql);
// if($data)
// {
// 	//echo "Data inserted";
// 	header("location:login.php");
// }
// else
// {
// 	echo "Not inserted";
// }

?>