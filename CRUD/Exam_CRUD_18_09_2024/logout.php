<?php
session_start();
session_unset();
session_destroy();
echo "<script>alert('User Logged Out')</script>";
echo "<script>window.location.href='login.php'</script>";
?>