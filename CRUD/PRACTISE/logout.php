<?php 
session_start();
session_unset();
session_destroy();
echo "<script>alert('User logged out')</script>";
echo "<script>window.location.href='login.html'</script>";
?>