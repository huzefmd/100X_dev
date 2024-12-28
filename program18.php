<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        setcookie("username",$_POST['username'],time()+(10*30),"/");
        echo"<p>Cookie set .RELOAD THE PAGE TO SEE THE COOKIE VALUE.<?P>";

    }
     if(isset($_COOKIE["username"])){
        echo"<P> welcome back ,".htmlspecialchars($_COOKIE["username"])."!</p>" ;

     }
     else{
        echo"<p> WELCOME GUEST!</p>";

     }
?>
<form  method= "Post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
    <label for="username">ENTER UR NAME</label>
    <input type="text"  id="username"  name="username"><br>
    <input type="submit" value="SET COOKIE">
</form>
  
    
</body>
</html>