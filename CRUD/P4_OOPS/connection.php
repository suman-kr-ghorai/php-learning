<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practise_01";

// Create connection
try{
$conn = new mysqli($servername, $username, $password, $dbname);
// echo "Connection succes";
}
catch(Exceptions $e){
    echo $e->getMessage();
}

?>
