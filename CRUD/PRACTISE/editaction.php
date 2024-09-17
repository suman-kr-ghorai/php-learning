<?php 
session_start();
include('connection.php');
$editId= $_REQUEST['user_id'];
$location= $_REQUEST['location'];
$age= $_REQUEST['age'];


$sql = "UPDATE `user01` SET `location`=:lo,`age`=:ag WHERE `user_id`=:id";
    $query = $conn->prepare($sql);
    $query->bindParam(':lo', $location);
    $query->bindParam(':ag', $age);
    $query->bindParam(':id', $editId);
    $result = $query->execute();

if($result)
{
	
	echo "<script>alert('successful update is done.')</script>";
echo "<script>window.location.href='display.php'</script>";
}
else
{
	echo "Not inserted";
}

?>