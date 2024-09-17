<?php
include('connection.php');
$fname=$_REQUEST['firstname'];
$lname=$_REQUEST['lastname'];
$age=$_REQUEST['age'];
$gender=$_REQUEST['gender'];
$backend=implode(',',$_REQUEST['back']);
$frontend=implode(',',$_REQUEST['front']);
$database=implode(',',$_REQUEST['db']);
$language=implode(',',$_REQUEST['lang']);
$sql="INSERT INTO `user00` (`firstname`,`lastname`,`age`,`gender`,`backend`,`frontend`,`database`,`language`) VALUES ('$fname','$lname','$age','$gender','$backend','$frontend','$database','$language')";
$data=mysqli_query($conn,$sql);
if($data){
    echo "Data inserted";
}
else{
    echo "Not inserted";
}




?>