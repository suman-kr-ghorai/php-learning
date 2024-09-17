<?php 
include('connection.php');
$ed_id= $_REQUEST['ed'];
$sql= "SELECT * FROM `user` where `user_id`='$ed_id'";
$data= mysqli_query($conn,$sql);
$result = mysqli_fetch_assoc($data);

//print_r($result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Form</title>
</head>
<body>
<form method="post" action="editaction.php">
	<input type="hidden" name="uid" value="<?php echo $result['user_id']?>">
	Name: <input type="text" name="name" value="<?php echo $result['name']?>"><br>
	Email: <input type="email" name="email" value="<?php echo $result['email']?>"><br>
	Phone: <input type="number" name="phone" value="<?php echo $result['phone']?>"><br>
	<input type="submit" name="submit" value="Update">
	Gender: <input type="radio" name="gender" value="Male"<?php if($result['gender']=='Male'){echo 'checked'}?>>Male
	        <input type="radio" name="gender" value="Female"<?php if($result['gender']=='Female'){echo 'checked'}?>>Female<br>
	Degree: <select name="degree">
			<option value=""<?php if($result['degree']==''){echo 'selected';}?>>Select</option>
			<option value="B.Tech"<?php if($result['degree']=='B.Tech'){echo 'selected';}?>>B.Tech</option>
			<option value="M.Tech"<?php if($result['degree']=='M.Tech'){echo 'selected';}?>>M.Tech</option>
			</select><br>
			<?php
			$langArray=explode(",",$result['language']);
			?>
	Language: <input type="checkbox" name="lang[]" value="Bengali"<?php if(in_array('Bengali',$langArray)){echo 'checked';}?>>Bengali
			  <input type="checkbox" name="lang[]" value="English" <?php if(in_array('English',$langArray)){echo 'checked';}?>>English
			  <input type="checkbox" name="lang[]" value="Hindi" <?php if(in_array('Hindi',$langArray)){echo 'checked';}?>>Hindi<br>
			  Image: 
			  <input type="file" name="image"><br>

</form>
</body>
</html>