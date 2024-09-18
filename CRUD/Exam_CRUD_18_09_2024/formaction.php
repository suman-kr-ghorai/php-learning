<?php
include("connection.php");
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$dob=$_REQUEST['dob'];
$gender=$_REQUEST['gender'];
$country=$_REQUEST['country'];
$address=$_REQUEST['address'];
$city=$_REQUEST['city'];
$state=$_REQUEST['state'];
$zip=$_REQUEST['zip'];
$comments=$_REQUEST['comments'];
$terms=$_REQUEST['terms'];
//echo ''.$name.''.$email.''.$phone.''.$dob.''.$gender.''.$country.''.$city.''.$state.''.$zip.''.$comments.''.$terms;
$sql="INSERT INTO `exam` (`name`,`email`,`phone`,`dob`,`gender`,`country`,`address`,`city`,`state`,`zip`,`comments`,`terms`) VALUES (:nm,:em,:ph,:dob,:ge,:co,:ad,:ct,:st,:zip,:cmt,:trm)";
$query=$conn->prepare($sql);
$query->bindparam(':nm',$name);
$query->bindparam(':em',$email);
$query->bindparam(':ph',$phone);
$query->bindparam(':dob',$dob);
$query->bindparam(':ge',$gender);
$query->bindparam(':co',$country);
$query->bindparam(':ad',$address);
$query->bindparam(':ct',$city);
$query->bindparam(':st',$state);
$query->bindparam(':zip',$zip);
$query->bindparam(':cmt',$comments);
$query->bindparam(':trm',$terms);
$data=$query->execute();
if($data){
    //echo 'Data Inserted';
    header("location:login.php");
}
else{
    echo 'Not Inserted';
}
?>