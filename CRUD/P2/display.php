<?php 
session_start();
include('connection.php');
$uid= $_SESSION['id'];
$sql= "SELECT * FROM `user` where user_id='$uid'";
$data= mysqli_query($conn,$sql);
// $result= mysqli_fetch_assoc($data);
// print_r($result);
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
		<th>Image</th>
		<th>Action</th>
	</tr>
<?php
$i=1;
while ($result= mysqli_fetch_assoc($data)) {
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
		<td><img src="<?php echo $result[user_id] ?>" alt=""></td>
		<td>
			<a href="edit.php?ed=<?php echo $result['user_id']?>">Edit</a> |
			<a href="delete.php?del=<?php echo $result['user_id']?>">Delete</a> |
			<a href="">ChangePassword</a>
		</td>
	</tr>
	<?php
}
?>
</table>
<center><a href="logout.php"><button>Logout</button></a></center>