<?php
session_start();
include("connection.php");
$ed_id=$_REQUEST['eId'];
$sql="SELECT * FROM `exam` where `email`=:em";
$query=$conn->prepare( $sql );
$query->bindparam(":em", $ed_id );
$query->execute();
while($result=$query->fetch(PDO::FETCH_ASSOC)){
   // print_r($result);
?>

     <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
  </head>
  <body>
    <form action="editaction.php" method="post">
      <h4><b>Personal Information</b></h4>
      <hr />
      Name
      <input type="text" name="name" placeholder="Enter your name" value="<?php echo $result['name'];?>" />
      Email<input type="email" name="email" placeholder="E-Mail id" value="<?php echo $result['email'];?>"/> 
      Phone Number <input type="number" name="phone" value="<?php echo $result['phone'];?>"/>
       Date of Birth: <input type="date" name="dob" value="<?php echo $result['dob'];?>"><br>
       Gender:
       <input type="radio" name="gender" value="Male"<?php if($result['gender']=="Male"){echo 'checked';}?> />Male
       <input type="radio" name="gender" value="Female"<?php if($result['gender']=="Female"){echo 'checked';}?> />Female
       <br>
       Country:
      <select name="country" id="">
        <option value="select"<?php  if($result['country']=="select"){echo 'selected';}?>>Select</option>
        <option value="USA"<?php  if($result['country']=="USA"){echo 'selected';}?>>USA</option>
        <option value="India"<?php  if($result['country']=="India"){echo 'selected';}?>>India</option>
        <option value="Bangladesh"<?php  if($result['country']=="Bangladesh"){echo 'selected';}?>>Bangladesh</option>
      </select>
      <hr />
      <h4><b>Adress</b></h4>
      <hr />

      Address Street<input type="text" name="address" value="<?php echo $result['address'];?>" />
       City <input type="text" name="city" value="<?php echo $result['city'];?>"/> 
       State <input type="text" name="state" value="<?php echo $result['state'];?>"/> 
       Zip-Code<input type="text" name="zip" value="<?php echo $result['zip'];?>"/>
      <hr />
      <h4><b>Other Information</b></h4>
      <hr />
      Comments <textarea  cols="30" type="text" name="comments" value="<?php echo $result['comments'];?>" >
      </textarea>
<br>
      I agree to the terms of Service<input
        type="checkbox"
        name="terms"
        value="agree" <?php if($result['terms']=="agree"){echo 'checked';}?>
        id=""
      />
      <hr />
      <button>Submit</button>
    </form>
  </body>
</html>



<?php
}

?>








