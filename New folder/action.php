<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    
    // Output
    echo "<h1>Signup Successful</h1>";
    echo "<p><strong>Username:</strong> " . $username . "</p>";
    echo "<p><strong>Email:</strong> " . $email . "</p>";
    
} else {
    
    echo "<p>Form submission error. Please use the form to submit data.</p>";
}

?>
