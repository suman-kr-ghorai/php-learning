<?php 
session_start();
include('connection.php');


$user_type=$_SESSION['user_type'];
if($user_type=="admin"){
	$sql= "SELECT * FROM `user` where `user_type`='client'";
}
else{
	$uid= $_SESSION['id'];
	$sql= "SELECT * FROM `user` where user_id='$uid'";
}


// $data= mysqli_query($conn,$sql);
// $result= mysqli_fetch_assoc($data);
// print_r($result);
$data= $conn->query($sql);
?>
<table border="1px">
	<tr>
		<th>Sl No.</th>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Phone</th>
		<th>Gender</th>
		<th>Degree</th>
		<th>Language</th>
		<th>UserType</th>
		<th>Image</th>
		<th>Action</th>
	</tr>
<?php
$i=1;
while ($result= $data->fetch_assoc()) {
	// code...
	 //print_r($result['name']);
	?>
	<tr>
		<td><?php echo $i;$i++;?></td>
		<td><?php echo $result['name'];?></td>
		<td><?php echo $result['email'];?></td>
		<td><?php echo $result['password'];?></td>
		<td><?php echo $result['phone'];?></td>
		<td><?php echo $result['gender'];?></td>
		<td><?php echo $result['degree'];?></td>
		<td><?php echo $result['language'];?></td>
		<td><?php echo $result['user_type'];?></td>
		<td><img src="<?php echo $result['image']?>" height="100" width="100"></td>
		<td>
			<a href="edit.php?ed=<?php echo $result['user_id']?>">Edit</a> |
			<a href="delete.php?del=<?php echo $result['user_id']?>">Delete</a> |
			<a href="chnpass.php">ChangePassword</a>
			<?php if($user_type=='admin' && $result['auth']==0){?>
				<a href="block.php?bId=<?php echo $result['user_id']?>">Block</a> |	

			<?php
		     }
			 else if($user_type=='admin'){?>
			 <a href="unblock.php?bId=<?php echo $result['user_id']?>">Unblock</a> |
			 <?php
			 }
			 ?>


		</td>
	</tr>
	<?php
}
?>
</table>
<center><a href="logout.php"><button>Logout</button></a></center>