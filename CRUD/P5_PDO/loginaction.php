<?php 
session_start();
include('connection.php');

$email = $_REQUEST['email'];
$password = md5($_REQUEST['password']);

$sql = "SELECT * FROM `user` WHERE `email` = :email AND `password` = :password AND `auth` = 0";
$query = $conn->prepare($sql);

$query->bindParam(':email', $email);
$query->bindParam(':password', $password);

$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);

if ($result) {
    $_SESSION['id'] = $result['user_id'];
    $_SESSION['user_type'] = $result['user_type'];
    $_SESSION['auth'] = $result['auth'];
    header("location:display.php");
} else {
    echo "<script>alert('Login-Failure')</script>";
    echo "login failure";
}
?>
