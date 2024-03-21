<?php
    include("dbconnect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css"> 
</head>
<body>
<div id="form">
        <div class="form-group">
        <h1><center>LOG IN </center></h1>
        <form name = "form" action= "login.php"method = "POST">
            <label>Username: </label>
            <input type="text" id="user" name="user"> </br> </br>
            <label>Password:  </label>
            <input type="password" id="pass" name = "pass"> </br> </br>
            <input type="submit" id="btn" value="Login" name="submit"> 
        </form>
        <p>Don't have an account?<a href="index2.php"> Signup</p></a>
    </div>
</div>
</body>
</html>