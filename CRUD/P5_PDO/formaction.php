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
$sql="INSERT INTO `user` (`name`, `email`, `password`, `phone`,`gender`,`degree`,`language`,`image`) VALUES (:nm,:em ,:ps,:ph,:ge,:de,:la,:fl)";
$query= $conn->prepare($sql);
$query->bindparam(':nm', $name);
$query->bindparam(':em',$email);
$query->bindparam(':ps', $password);
$query->bindparam(':ph', $phone);
$query->bindparam(':ge', $gender);
$query->bindparam(':de', $degree);
$query->bindparam(':la', $language);
$query->bindparam(':fl', $folder);
$data=$query->execute();
if($data)
{
//echo "Data Inserted";
header("location:login.php");
}

 else{
echo "Not Inserted";
 }

 ?>

