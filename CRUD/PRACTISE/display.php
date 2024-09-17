<?php 

include("connection.php");
session_start();
$uid= $_SESSION['id'];


$sql= "SELECT * FROM `user01` where user_id=:user";
$query=$conn->prepare( $sql );
$query->bindParam(':user', $uid);

$query->execute();
$result=$query->fetch(PDO::FETCH_ASSOC);
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h1>
    Welcome,<?php echo $result['user_id']; ?>
    
</h1>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>User Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="username" class="form-label"><strong>Username:</strong></label>
                            <p id="username"><?php echo $result['user_id']; ?></p>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label"><strong>Email:</strong></label>
                            <p id="email"><?php echo $result['email']; ?></p>
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label"><strong>Age:</strong></label>
                            <p id="age"><?php echo $result['age']; ?></p>
                        </div>
                        <div class="mb-3">
                            <label for="location" class="form-label"><strong>Location:</strong></label>
                            <p id="location"><?php echo $result['location'] ?></p>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                    <center><a  href="edit.php?ed=<?php echo $result['user_id']?>"><button class="btn btn-primary">Edit</button></a></center>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<center><a  href="logout.php"><button class="btn btn-danger">Logout</button></a></center>
