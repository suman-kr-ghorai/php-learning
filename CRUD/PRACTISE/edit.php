<?php 
session_start();
include('connection.php');
$ed_id= $_REQUEST['ed'];
$sql= "SELECT * FROM `user01` where `user_id`=:e";
$query = $conn->prepare($sql);
$query->bindParam(':e',$ed_id);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Form</title>
</head>
<body>
<form method="post" action="editaction.php" >
	
<input type="hidden" name="user_id" value="<?php echo $ed_id?>">
	Location: <input type="text" name="location" value="<?php echo $result['location']?>"><br>
	Age: <input type="number" name="age" value="<?php echo $result['age']?>"><br>

	
	
	
	<input type="submit" name="submit" value="Update">
</form>
</body>
</html>