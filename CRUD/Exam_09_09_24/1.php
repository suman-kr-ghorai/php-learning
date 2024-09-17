<?php
session_start();

$lastSubmitTime = isset($_SESSION['last_submit_time']) ? $_SESSION['last_submit_time'] : 0;
$current_time = time();
$time_difference = $current_time - $lastSubmitTime;

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($time_difference < 15) {
        $message = "Please wait 15 seconds...";
    } else {
        $subject = $_POST['subject'];
        $marks = $_POST['marks'];
        $message = "You entered $marks% marks in $subject";
        $_SESSION['last_submit_time'] = $current_time;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks Entry</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
        }
        .message {
            margin-top: 20px;
            color: green;
        }
        .error {
            color: red;
        }
        button:disabled {
            background-color: gray;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Enter Your Marks</h2>
    <form method="POST" action="">
        <label for="subject">Select Subject:</label>
        <select name="subject" id="subject" required>
            <option value="">--Select a Subject--</option>
            <option value="Math">Math</option>
            <option value="Science">Science</option>
            <option value="History">History</option>
        </select>

        <br><br>

        <label for="marks">Enter Marks (%):</label>
        <input type="number" name="marks" id="marks" min="0" max="100" required>

        <br><br>

        <button type="submit" <?php echo ($time_difference < 15) ? 'disabled' : ''; ?>>Submit</button>
    </form>

    <p class="message <?php echo ($time_difference < 15) ? 'error' : ''; ?>"><?php echo $message; ?></p>
</div>

</body>
</html>
