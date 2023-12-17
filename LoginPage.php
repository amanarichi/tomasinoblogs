<?php
    include("LoginPageConnection.php");  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_LoginPage.css">
    <link rel="icon" type="image/x-icon" href="Images/tb_icon.png">
    <title>Login Page</title>
</head>
<body>

    <header>
        <ul class="menu">
            <li><a href="Home.php"><img src = "Images/tb_icon.png" class = "tb_icon"></a></li>
            <li><a href="RegisterPageOne.php" class = "register"> Register </a></li>
            <li><a href="LoginPage.php" class = "log-in"> Log-in </a></li>
        </ul>
    </header>

    <img class="logo_LoginPage" src="Images/tb_logo.png" alt="TomasinoBlogs Logo">

        <div class="container">
            <form class="login-form" action="LoginPage1.php" onsubmit = "return isvalid()" method="POST">
                <p> Username </p>
                <input type="text" id = "username" name="username">
                <p> Password </p>
                <input type="password" id = "password" name="password">
                <br/>
                <input type="submit" id = "btn" value = "Login" name = "submit"/>
                <p> Don't have an account? <a href = "RegisterPageOne.php"> Register Here! </a></p> 
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
    </script>
    
</body>
</html>