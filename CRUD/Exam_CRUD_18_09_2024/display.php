<?php
include("connection.php");
session_start();
$user_type=$_SESSION['user_type'];
$email=$_SESSION['email'];
if($user_type== 'admin'){
    $sql="SELECT * FROM `exam` WHERE `user_type`='client'";
    $query=$conn->prepare($sql);

}
else{
    
    $sql= "SELECT * FROM `exam` WHERE `email`=:em";
    $query=$conn->prepare($sql);
$query->bindparam(':em',$email);
}


$query->execute();
?>

<table border="1px">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th>Country</th>
        <th>Adress Street</th>
        <th>City</th>
        <th>State</th>
        <th>Zip Code</th>
        <th>Comments</th>
        <th>Actions</th>
            
</tr>
<?php
    while($result=$query->fetch(PDO::FETCH_ASSOC)){
    //print_r($result);
    ?>
    <tr>
        <td><?php echo $result['name'] ?></td>
        <td><?php echo $result['email'] ?></td>
        <td><?php echo $result['phone'] ?></td>
        <td><?php echo $result['dob'] ?></td>
        <td><?php echo $result['gender'] ?></td>
        <td><?php echo $result['country'] ?></td>
        <td><?php echo $result['address'] ?></td>
        <td><?php echo $result['city'] ?></td>
        <td><?php echo $result['state'] ?></td>
        <td><?php echo $result['zip'] ?></td>
        <td><?php echo $result['comments'] ?></td>
        <td>
        <?php if($user_type== 'admin' && $result['auth']==0){ ?>
            <a href="block.php?bId=<?php echo $result['email'] ?>">Block</a>
        <?php } ?>
        <?php if($user_type== 'admin' && $result['auth']==1){ ?>
            <a href="unblock.php?bId=<?php echo $result['email'] ?>">Unblock</a>
        <?php } ?>
        <?php if($user_type== 'client'){ ?>
            <a href="edit.php?eId=<?php echo $result['email'] ?>">Edit</a>
        <?php } ?>

        </td>
        </tr>
    
        
    <?php
    
    }
    ?>
    
    </table>
    <center><a href="logout.php">Logout</a></center>