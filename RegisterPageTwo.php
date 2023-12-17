<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "style_RegisterPage1.css">
    <link rel = "icon" type = "tb-icon" href = "Images/tb_icon.png">
    <title> Registered Successfully! </title>
</head>
<body>
    
    <header>
        <ul class="menu">
            <li><img src = "Images/tb_icon.png" class = "tb_icon"></li>
            <li><a href="RegisterPageOne.php" class = "register"> Register </a></li>
            <li><a href="LoginPage.php" class = "log-in"> Log-in </a></li>
        </ul>
    </header>

    <img src = "Images/tb_logo.png" alt = "TomasinoBlogs Logo" class = "logo_RegisterPageTwo">
    
    <div class = "container">
        <h1> Congratulations! </h1>
    
        <?php
        //Connection String
        $servername = "localhost";
        $username = "root"; 
        $password = "";
        $database = "TomasinoBlogsDB";
        

         //Create Connection
        $connection = new mysqli($servername, $username, $password, $database);

        //Check Connection
        /*if (!$connection){
            echo "Connection Failed\n";
        }else{
            echo "Connection Successful\n";
        } 
        */ 

        //Create Database
        /*$sql = "CREATE DATABASE TomasinoBlogsDB";

        if ($connection->query($sql) === true){
            echo "DB Created";
        }else{
            echo "DB Not Created" . $conn->error;
        }*/

        //Create Table
        /*$sql = "CREATE TABLE TomasinoBlogsDB (id INT(5) AUTO_INCREMENT PRIMARY KEY, Username VARCHAR(50), Email VARCHAR(100) NOT NULL, Pass VARCHAR(50) NOT NULL, Birthdate DATE NOT NULL, Gender VARCHAR(10) NOT NULL)";

        if ($connection -> query($sql) === true) {
            echo "Table Created Successfully!";
        } else {
            echo "Table Not Created!";
        }*/
        

   
        //Insert Data
        /*$sql = "INSERT INTO TomasinoBlogs (Username, Email, Pass, Birthdate, Gender) 
                  VALUES ('Kujou03', 'kujou03@gmail.com', 'dikoalameh123', '2003-05-14', 'Male')";


        if($connection -> query($sql) === true){
            echo "New Record Created Successfully";
        } else {
            echo "Failed to Add" . $conn->error;
        }*/
        
        
        $stmt = $connection -> prepare("INSERT INTO TomasinoBlogsDB (Username, Email, Pass, Birthdate, Gender) VALUES (?,?,?,?,?)");
        $stmt -> bind_param("sssss", $Username, $Email, $Pass, $Birthdate, $Gender);
 
        $Username = $_POST["username"];
        $Email = $_POST["email"];
        $Pass = $_POST["password"];
        $Birthdate = $_POST["birthdate"];
        $Gender = $_POST["gender"];
        $stmt -> execute();
   
        echo "<br>";
        echo "<b><label><center> Your Account has been Created!</center></label></b>";

        echo "<br>";
        echo "<b><label><center> Username </center></label></b>";
        echo "<span><center> $Username </center></span>";

        echo "<br>";
        echo "<b><label><center> Email </center></label></b>";
        echo "<span><center> $Email </center></span>";    

        echo "<br>";
        echo "<b><label><center> Password </center></label></b>";
        echo "<span><center> $Pass </center></span>";
    
        echo "<br>";
        echo "<b><label><center> Birthdate </center></label></b>";
        echo "<span><center> $Birthdate </center></span>";

        echo "<br>";
        echo "<b><label><center> Gender </center></label></b>";
        echo "<span><center> $Gender </center></span>";
        echo "<br>";
        ?>
</div>
        
</body>
</html>