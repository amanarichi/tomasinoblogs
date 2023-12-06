<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "style_RegisterPage.css">
    <link rel = "icon" type = "TB-Icon" href = "Images/tb_icon.png">
    <title> Registration Page </title>
</head>
<body>
    <header>
        <ul class="menu">
            <li><a href="RegisterPageOne.php"> Register </a></li>
            <li><a href="LoginPage.php"> Log-in </a></li>
        </ul>
    </header>

     
    <img src = "Images/tb_logo.png" alt = "TomasinoBlogs Logo" class = "logo_RegisterPageOne">
    

    <div class = "container">
        <form action = "RegisterPageTwo.php" method = "post">
                
                <div class = "form-group">
                    <p> Username </p>
                    <input type = "text" id = "username" placeholder = "" name = "username" required>
                </div>

                <div class = "form-group">
                    <p> Email </p>
                    <input type = "email" id = "email" placeholder = "" name = "email" required>
                </div>
  
                <div class = "form-group">
                    <p> Password </p>
                    <input type = "password" id = "password" placeholder = "" name = "password" required>
                </div>
  
                <div class = "form-group">
                    <p> Birthdate </p>
                    <input type = "date" id = "birthdate" placeholder = "" name = "birthdate" required>
                </div>
  
                <div class = "form-group">
                    <p> Gender </p>
                        <select id = "gender" name = "gender" required>
                            <option value="" style =></option>
                            <option value = "Male"> Male </option>
                            <option value = "Female"> Female </option>
                            <option value = "Other"> Other </option>
                        </select>
                </div>

                <div class = "form-group1">
                    <p>Sign Up?</p>
                    <button type = "submit"> Sign Up </button>
                </div>
    </form>
</body>
</html>