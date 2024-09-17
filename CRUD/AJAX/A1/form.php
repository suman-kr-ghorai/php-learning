
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
Name: <input type="text" name="name" id="name"><br>
Email: <input type="email" name="email" id="email"><br>
password: <input type="password" name="password" id="password"><br> 
Phone: <input type="number" name="phone" id="phone"><br>
Image: <input type="file" name="image" id="image"><br>
	
<button type="submit" id="submit">Submit</button>
<div id="div"></div> 
<script type="text/javascript">

    $(document).ready(function(){
    $("#submit").click(function(){
         var nme= $("#name").val();
        var eml= $("#email").val();
        var psw= $("#password").val(); 
        var phn= $("#phone").val(); 
        var img=$("#image")[0].files[0];
        //console.log(nme,eml,psw,phn);
    //$.ajax({
    //  type: "POST",
    //    url: "formaction.php",
    //    data: {nm:nme,em:eml,ps:psw,ph: phn}
    //    }).done(function(data) { 
    //        $("#div").html(data);
    //    });
     formdata=new FormData();
    formdata.append("nm",nme);
    formdata.append("em",eml);
    formdata.append("ps",psw);
    formdata.append("ph",phn);
    formdata.append("im",img);
    $.ajax({
        type: "POST",
        url: "formaction.php",
        data: formdata,
        contentType:false,
        processData:false
    }).done(function(data) { 
            $("#div").html(data);
        });
    } );
});
</script>
</body>
</html>
