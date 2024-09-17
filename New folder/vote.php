<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote</title>
</head>
<body>
    <form method="post">
        <input type="submit" name="submit" value="ASP">
        <input type="submit" name="submit" value="PHP">
    </form>

    <?php
        if(isset($_REQUEST['submit'])){
            $btn= $_REQUEST['submit'];
            if(isset($_COOKIE['btname'])){
                echo "you have already voted in". $_COOKIE['btname'];
            }
            else{
                echo "Thanks for votting";
                setcookie("btname",$btn,time()+10);
            }
        }

?>

</body>
</html>