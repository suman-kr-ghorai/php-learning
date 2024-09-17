<?php 
include('connection.php');
$user_id= $_REQUEST['user_id'];
$email= $_REQUEST['email'];
$password= md5($_REQUEST['password']);
$location= $_REQUEST['location'];
$age= $_REQUEST['age'];


$checkId= "SELECT user_id from user01 where user_id=:uid";

$query = $conn->prepare($checkId);
$query->bindParam(':uid', $user_id);
$query->execute();
$existId=$query->fetch(PDO::FETCH_ASSOC);
print_r($existId);
if($existId)
{
	//echo "Email id already exist";
	echo "<script>alert('User id already exist')</script>";
	echo "<script>window.location.href='form.html'</script>";
}
else{

 $sql= "INSERT INTO `user01`( `user_id`, `email`, `password`,   `location`, `age`) VALUES (:uid ,:em,:ps,:lo,:age)";

$query= $conn->prepare($sql);
$query->bindparam(':uid', $user_id);
$query->bindparam(':em',$email);
$query->bindparam(':ps', $password);
$query->bindparam(':lo', $location);
$query->bindparam(':age', $age);
$data=$query->execute();

if($data)
{
	
	echo "<script>alert('registered')</script>";
echo "<script>window.location.href='login.html'</script>";
}
else
{
	echo "Not inserted";
}
}

?>