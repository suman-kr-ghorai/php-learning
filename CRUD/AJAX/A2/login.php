<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
</head>
<body>
    <form method="post" action="loginaction.php">
        UserId:<input type="text" name="user_id" id="user_id" required><br>
        Password:<input type="password" name="password" id="password" required><br>
        <button type="submit">Login</button>
        <a href="form.php">New Registration</a>
    </form>
</body>
</html>
