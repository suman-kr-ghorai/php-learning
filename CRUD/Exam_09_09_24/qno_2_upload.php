<?php


$filename=$_FILES['image']['name'];
$tempname=$_FILES['image']['tmp_name'];
$folder='upload/'.$filename;
move_uploaded_file($tempname,$folder);
?>