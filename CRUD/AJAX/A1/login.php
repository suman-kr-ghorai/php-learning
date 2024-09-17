<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    Email:<input type="email" name="email" id="email"><br>
    Password:<input type="password" name="password" id="password"><br>
    <button type="submit" id="submit">Login</button>
    <a href="form.php">New Registration</a>
    <div id="div"></div> 

    <script type="text/javascript">
        $(document).ready(function(){
            $("#submit").click(function(event){
                
                event.preventDefault();

                var eml= $("#email").val();
                var psw= $("#password").val(); 
                var formdata = new FormData();
                
                formdata.append("em", eml);
                formdata.append("ps", psw);

                $.ajax({
                    type: "POST",
                    url: "loginaction.php",
                    data: formdata,
                    processData: false, 
                    contentType: false  
                }).done(function(data) { 
                    $("#div").html(data);
                });
            });
        });
    </script>
</body>
</html>
