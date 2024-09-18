<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
  </head>
  <body>
    <form action="formaction.php" method="post">
      <h4><b>Personal Information</b></h4>
      <hr />
      Name
      <input type="text" name="name" placeholder="Enter your name" />
      Email<input type="email" name="email" placeholder="E-Mail id" /> 
      Phone Number <input type="number" name="phone" />
       Date of Birth: <input type="date" name="dob"><br>
       Gender:
       <input type="radio" name="gender" value="Male" />Male
       <input type="radio" name="gender" value="Female" />Female
       <br>
       Country:
      <select name="country" id="">
        <option value="select">Select</option>
        <option value="USA">USA</option>
        <option value="India">India</option>
        <option value="Bangladesh">Bangladesh</option>
      </select>
      <hr />
      <h4><b>Adress</b></h4>
      <hr />

      Address Street<input type="text" name="address" />
       City<input type="text" name="city" /> 
       State<input type="text" name="state" /> 
       Zip-Code<input type="text" name="zip" />
      <hr />
      <h4><b>Other Information</b></h4>
      <hr />
      Comments <textarea  cols="30" type="text" name="comments" >
      </textarea>
<br>
      I agree to the terms of Service<input
        type="checkbox"
        name="terms"
        value="agree"
        id=""
      />
      <hr />
      <button>Submit</button>
    </form>
  </body>
</html>
