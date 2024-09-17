<?php
include('connection.php');
$name=$_REQUEST['nm'];
$email=$_REQUEST['em'];
$password=$_REQUEST['ps'];
$phone=$_REQUEST['ph'];
$filename= $_FILES['im']['name'];
$tempname= $_FILES['im']['tmp_name'];
$folder= 'upload/'.$filename;
move_uploaded_file($tempname, $folder);

$sql="INSERT INTO `aj`(`name`, `email`, `password`, `phone`,`image`) VALUES ('$name','$email','$password','$phone','$folder')";
$data= mysqli_query($conn,$sql);
if($data){
    echo "inserted";
   // header('location:display.php');
}
//echo $name,$email,$password,$phone;
?>
