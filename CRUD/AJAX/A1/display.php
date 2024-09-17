<?php
include('connection.php');
//echo "ok";
$sql= "SELECT * FROM `aj`";


$data= mysqli_query($conn,$sql);
// $result= mysqli_fetch_assoc($data);
// print_r($result);
?>
<table border="1px">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Phone</th>
		<th>Image</th>
	</tr>
<?php
while ($result= mysqli_fetch_assoc($data)) {
	?>
	<tr>
		
		<td><?php echo $result['name'];?></td>
		<td><?php echo $result['email'];?></td>
		<td><?php echo $result['password'];?></td>
		<td><?php echo $result['phone'];?></td>
		<td><img src="<?php echo $result['image']?>" height="100" width="100"></td>
		
	</tr>
	<?php
}
?>
</table>
?>