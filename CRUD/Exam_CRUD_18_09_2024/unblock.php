<?php
session_start();
include("connection.php");

$block_id=$_REQUEST['bId'];
$sql="UPDATE `exam` SET `auth`=0 WHERE `email`=:em";
$data=$conn->prepare( $sql );
$data->bindparam(":em", $block_id );
$data->execute();
if($data){
    echo "<script>alert('User Un-Blocked')</script>";
echo "<script>window.location.href='display.php'</script>";
}


?>