<?php
session_start();
include("connection.php");

$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];

$sql= "SELECT * FROM `exam` WHERE `email`= :em AND `phone`=:ph AND `auth`=0";
$query=$conn->prepare( $sql );

$query->bindparam(":em", $email );
$query->bindparam(":ph", $phone );
$query->execute();
$result=$query->fetch(PDO::FETCH_ASSOC);

if($result){
    $_SESSION['email']=$result['email'];
    $_SESSION['phone']=$result['phone'];
    $_SESSION['auth']=$result['auth'];
    $_SESSION['user_type']=$result['user_type'];
    header("location:display.php");
}
else{
    echo "<script>alert('Login Failure')</script>";
    echo "Login Failure";
}

?>