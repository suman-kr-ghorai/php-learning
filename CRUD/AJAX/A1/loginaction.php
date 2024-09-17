<?php
include('connection.php');
// echo "ok";
$email=$_REQUEST['em'];
$password=$_REQUEST['ps'];
//echo $email,$password;
 $sql= "SELECT * FROM `aj` WHERE `email`='$email' AND `password`='$password'";


$data= mysqli_query($conn,$sql);
$num_rows = mysqli_num_rows($data);
 if($num_rows>0){
     $result= mysqli_fetch_assoc($data);
    //print_r($result);
    ?>
    <table border="1px">
	<tr>
		
		<th>Name</th>
		<th>Email</th>
		<!-- <th>Password</th> -->
		<th>Phone</th>
		<th>Image</th>
		
	</tr>
	<tr>
		
		<td><?php echo $result['name'];?></td>
		<td><?php echo $result['email'];?></td>
		<td><?php echo $result['password'];?></td>
		<td><?php echo $result['phone'];?></td>
		
		<td><img src="<?php echo $result['image']?>" height="100" width="100"></td>
		
	</tr>

</table>
<?php
 }
 else{
	echo "Login Failure";
 }
?>