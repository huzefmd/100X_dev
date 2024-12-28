<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Name:<input type="text" name="name"><br><br>
        Email:<input type="text" name="email"><br><br>
        <input type="submit" name="submit" value="Submit">

    </form>
    
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];

    if(empty($name)){
        echo"Name is Requered.<br> <br>";
    }
    else{
        echo " Name :".$name."<br><br>";
    }
    if(empty($email)){
        echo "email is requered .<br><br>";
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo"INVALID EMAIL FORMAT.<BR><BR>";  
    }
    else{
        echo"email ".$email."<br><br>";
    }
}


?>