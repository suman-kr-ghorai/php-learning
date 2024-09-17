<?php

session_start();
(isset($_SESSION['page_count'])) ? $_SESSION['page_count'] +=1:$_SESSION['page_count'] = 0;
echo "Page Counter:".$_SESSION['page_count'];
?>

