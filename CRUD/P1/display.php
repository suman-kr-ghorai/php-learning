<?php 
include('connection.php');
$sql= "SELECT * FROM `user`";
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
		<td>
			<a href="">Edit</a> |
			<a href="">Delete</a>
		</td>
	</tr>
	<?php
}
?>
</table>