<?php
$servername= "localhost";
$username= "root";
$password= "";
$db= "practise_01";
try
{
$conn= new PDO("mysql:host={$servername}; dbname={$db}",$username, $password);
$conn->setAttribute (PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
//echo "Connection Success";
}
catch(PDOException $e){
echo $e->getMessage();
}
?>
