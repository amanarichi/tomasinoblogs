<?php
    include("LoginPageConnection.php");  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_LoginPages.css">
    <link rel="icon" type="image/x-icon" href="Images/tb_icon.png">
    <title>Login Page</title>
</head>
<body>
    <header>
        <ul class="menu">
            <li><a href="RegisterPageOne.php"> Register </a></li>
            <li><a href="LoginPage.php"> Log-in </a></li>
        </ul>
    </header>

    <img class="logo_LoginPage" src="Images/tb_logo.png" alt="TomasinoBlogs Logo">

    <div class="container">

        <form class="login-form" action="LoginPage1.php" onsubmit = "return isvalid()" method="POST">
            <input type="text" id = "emailuser" name="emailuser" placeholder=" Username">
            <input type="password" id = "password" name="password" placeholder=" Password">
            <input type="submit" id = "btn" value = "Login" name = "submit"/>
        </form>
    </div>
    <script>
        function isvalid(){
            var emailuser = document.form.emailuser.value;
            var password = document.form.password.value;
            if(user.length=="" && pass.length==""){
                alert("Username and Password Field is Empty!");
                return false
            }
            else{
                if(emailuser.length==""){
                    alert("Username or Email is Empty!");
                    return false
                }
                if(password.length==""){
                    alert("Password is Empty!");
                    return false
                }
            }
        }
</body>
</html