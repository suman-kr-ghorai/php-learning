<?php 
session_start();
include('connection.php');

$user_id = $_REQUEST['user_id'];
$password = md5($_REQUEST['password']);


$sql = "SELECT * FROM `user01` WHERE `user_id` = :uid AND `password` = :password";
$query = $conn->prepare($sql);
$query->bindParam(':uid', $user_id);
$query->bindParam(':password', $password);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);

if ($result) {
    $_SESSION['id'] = $result['user_id'];
    
    header("location:display.php");
} else {
    echo "<script>alert('Login-Failure')</script>";
    echo "login failure";
}
?>
