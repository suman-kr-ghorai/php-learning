<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form method="POST">
    <label for="subject">Subject</label>
    <select name="subject" id="subject" onchange="toggle()">
        <option value="select" >select</option>
        <option value="maths">Maths</option>
        <option value="Physics">Physics</option>
        <option value="english">english</option>
    </select>
    <br>
    <div id="extra">
    
    <button type="submit">Submit</button>
</div>
    </form>
<script>
    <script>
        function toggle() {
            var dropdown = document.getElementById("subject");
            var textbox = document.getElementById("extra");
            
            // Show or hide the textbox based on the selected option
            if (dropdown.value === "option3") { // Change this condition based on your needs
                textbox.style.display = "block";
            } else {
                textbox.style.display = "none";
            }
        }
    </script>
</script>
</body>
</html>