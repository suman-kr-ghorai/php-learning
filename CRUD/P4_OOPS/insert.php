<?php
include("connection.php");
$name = "user0111";
$email = "@example.com";

$sql = "INSERT INTO user (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
