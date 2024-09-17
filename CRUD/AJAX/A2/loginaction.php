<?php
session_start();
include('connection.php');
// echo "ok";
$user_id=$_REQUEST['user_id'];
$password=$_REQUEST['password'];
//echo $email,$password;
 $sql= "SELECT * FROM `login` WHERE `user_id`='$user_id' AND `password`='$password'";


$data= mysqli_query($conn,$sql);
$num_rows = mysqli_num_rows($data);
if($num_rows>0){
	$user= mysqli_fetch_assoc($data);
	//$user_id=$user['user_id'];
	$_SESSION['id']=$user_id;
	$sub="SELECT * FROM `subscriptions` WHERE `user_id`='$user_id' AND `registered`=1";
	$sdata=mysqli_query($conn,$sub);
	$sub_res= mysqli_num_rows($sdata);
	if($sub_res>0){
		$r= mysqli_fetch_assoc($sdata);
		//print_r($result);
		?>
		<table border="1px">
		<tr>
			
			<th>Name</th>
			<th>Email</th>
			<!-- <th>Password</th> -->
			<th>Registered</th>
			
			
		</tr>
		<tr>
			
			<td><?php echo $r['name'];?></td>
			<td><?php echo $r['email'];?></td>
			<td>Yes</td>
		</tr>
	
	
	
	</table>
<?php
	}
	else{
		?>
		<button id="openModalBtn">PLEASE REGISTER</button>
		<button >Logout</button>

<!-- The Modal -->
<div id="myModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5);">
  <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: #fff; padding: 20px; border: 1px solid #888; width: 80%; max-width: 500px;">
    <span id="closeModalBtn" style="float: right; font-size: 28px; cursor: pointer;">&times;</span>
    <h2>Contact Form</h2>
    <form method="post" action="registration.php">
      <label for="name">Name:</label><br>
      <input type="text" id="name" name="name" required><br><br>
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" required><br><br>
      <input type="submit" value="Submit">
    </form>
  </div>
</div>

<script>
    // m
    var modal = document.getElementById("myModal");

    // button opens for m
    var openBtn = document.getElementById("openModalBtn");

    // closing the modal
    var closeBtn = document.getElementById("closeModalBtn");

    // button, open the modal
    openBtn.onclick = function() {
        modal.style.display = "block";
    }

    //  close the modal
    closeBtn.onclick = function() {
        modal.style.display = "none";
    }
</script>
<?php

	}
}

 else{
	echo "Login Failure";
 }
?>