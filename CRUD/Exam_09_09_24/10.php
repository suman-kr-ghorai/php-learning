<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
</head>
<body>
    <h1>SignUp</h1>
    <form action="formaction.php" method="POST">
        firstName<input type="text" id="firstname" name="firstname" required>
        LastName<input type="text" id="lastname" name="lastname" required>
        Age<input type="number" id="age" name="age" required>
        <br>
        Gender: <input type="radio" name="gender" value="Male">Male
	        <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Transgender">Transgender<br>
            
	Backend: <input type="checkbox" name="back[]" value="PHP">PHP
    <input type="checkbox" name="back[]" value="NodeJS">NodeJs
    <br>
    FrontEnd: <input type="checkbox" name="front[]" value="Angular">Angular
    <input type="checkbox" name="front[]" value="React">React

    <br>

    Database: <input type="checkbox" name="db[]" value="MYSQL">MYSQL

    <input type="checkbox" name="db[]" value="MongoDb">MongoDB
    <br>

    <label for="languages">languages:</label>
    <select name="lang[]" id="languages" multiple size="5">
        <option value="English">english</option>
        <option value="Bengali">Bengali</option>
        <option value="spanish">spanish</option>
        <option value="french">French</option>
        <option value="german">German</option>
    </select>
    <br>
    <button type="submit">Submit</button>
    <button type="reset">Reset</button>
    <a href="">SAVE AS PDF</a>




	
	

    </form>
</body>
</html>