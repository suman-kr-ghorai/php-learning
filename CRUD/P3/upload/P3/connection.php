<?php 
$servername= "localhost";
$username= "root";
$password= "";
$db= "practise_01";
$conn= mysqli_connect($servername,$username,$password,$db);
if($conn)
{
	//echo "Connection Successfull";
}
else
{
	echo "Not Connected";
}
?>